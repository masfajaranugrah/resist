<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->onlyInput('email');
    }

    public function dashboard(Request $request)
    {
        $query = Registration::query();

        // Search filter
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('nomor_id', 'like', "%{$search}%")
                  ->orWhere('no_telepon', 'like', "%{$search}%");
            });
        }

        $registrations = $query->orderBy('created_at', 'desc')->paginate(20);

        // Stats
        $totalRegistrations = Registration::count();
        $todayRegistrations = Registration::whereDate('created_at', Carbon::today())->count();
        $thisMonthRegistrations = Registration::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();

        return view('admin.dashboard', compact(
            'registrations',
            'totalRegistrations',
            'todayRegistrations',
            'thisMonthRegistrations'
        ));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function exportCsv()
    {
        $registrations = Registration::all();
        $csvFileName = 'registrasi_pelanggan_' . date('Ymd_His') . '.csv';
        
        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$csvFileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['Nama Lengkap', 'Nomor Telepon', 'Nomor ID', 'Biaya Langganan', 'Alamat', 'Bukti IG', 'Bukti TikTok Jernih', 'Bukti TikTok Creatif', 'Bukti GMaps', 'Tanggal Registrasi'];

        $callback = function() use($registrations, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($registrations as $reg) {
                fputcsv($file, [
                    $reg->nama,
                    $reg->no_telepon,
                    $reg->nomor_id,
                    $reg->biaya_langganan,
                    $reg->alamat,
                    $reg->bukti_ig ? asset('storage/' . $reg->bukti_ig) : '',
                    $reg->bukti_tiktok_jernih ? asset('storage/' . $reg->bukti_tiktok_jernih) : '',
                    $reg->bukti_tiktok_creatif ? asset('storage/' . $reg->bukti_tiktok_creatif) : '',
                    $reg->bukti_gmaps ? asset('storage/' . $reg->bukti_gmaps) : '',
                    $reg->created_at->format('Y-m-d H:i:s'),
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function exportPdf()
    {
        $registrations = Registration::orderBy('created_at', 'desc')->get();

        $pdf = Pdf::loadView('admin.export_pdf', compact('registrations'))
            ->setPaper('a4', 'portrait')
            ->setOption('isHtml5ParserEnabled', true)
            ->setOption('isRemoteEnabled', true)
            ->setOption('defaultFont', 'DejaVu Sans')
            ->setOption('dpi', 120)
            ->setOption('defaultMediaType', 'screen');

        $filename = 'registrasi_bukti_' . date('Ymd_His') . '.pdf';

        return $pdf->download($filename);
    }
}

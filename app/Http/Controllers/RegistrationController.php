<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function step1()
    {
        return view('registration.step1');
    }

    public function storeStep1(Request $request)
    {
        $data = $request->validate([
            'nama'            => 'required|string|max:255',
            'no_telepon'      => 'required|string|max:20',
            'nomor_id'        => 'required|string|max:100',
            'biaya_langganan' => 'required|string|max:100',
            'alamat'          => 'required|string',
        ]);

        session(['step1' => $data]);

        return redirect()->route('register.step2');
    }

    public function step2()
    {
        if (!session('step1')) {
            return redirect()->route('register.step1');
        }

        return view('registration.step2');
    }

    public function store(Request $request)
    {
        $request->validate([
            'confirmed'            => 'accepted',
            'bukti_ig'             => 'required|image|max:5120',
            'bukti_tiktok_jernih'  => 'required|image|max:5120',
            'bukti_tiktok_creatif' => 'required|image|max:5120',
            'bukti_gmaps'          => 'required|image|max:5120',
        ], [
            'confirmed.accepted'             => 'Anda harus mencentang konfirmasi terlebih dahulu.',
            'bukti_ig.required'              => 'Bukti follow Instagram harus diunggah.',
            'bukti_ig.image'                 => 'Bukti follow Instagram harus berupa gambar.',
            'bukti_tiktok_jernih.required'   => 'Bukti follow TikTok @jernih.net harus diunggah.',
            'bukti_tiktok_jernih.image'      => 'Bukti follow TikTok @jernih.net harus berupa gambar.',
            'bukti_tiktok_creatif.required'  => 'Bukti follow TikTok @jernihcreatif harus diunggah.',
            'bukti_tiktok_creatif.image'     => 'Bukti follow TikTok @jernihcreatif harus berupa gambar.',
            'bukti_gmaps.required'           => 'Bukti review Google Maps harus diunggah.',
            'bukti_gmaps.image'              => 'Bukti review Google Maps harus berupa gambar.',
        ]);

        $step1 = session('step1');

        $pathIg = $request->file('bukti_ig')->store('bukti', 'public');
        $pathTiktokJernih = $request->file('bukti_tiktok_jernih')->store('bukti', 'public');
        $pathTiktokCreatif = $request->file('bukti_tiktok_creatif')->store('bukti', 'public');
        $pathGmaps = $request->file('bukti_gmaps')->store('bukti', 'public');

        Registration::create([
            'nama'                 => $step1['nama'],
            'alamat'               => $step1['alamat'],
            'no_telepon'           => $step1['no_telepon'],
            'nomor_id'             => $step1['nomor_id'],
            'biaya_langganan'      => $step1['biaya_langganan'],
            'follow_ig'            => true,
            'follow_tiktok'        => true,
            'review_gmaps'         => true,
            'bukti_ig'             => $pathIg,
            'bukti_tiktok_jernih'  => $pathTiktokJernih,
            'bukti_tiktok_creatif' => $pathTiktokCreatif,
            'bukti_gmaps'          => $pathGmaps,
        ]);

        session()->forget('step1');

        return redirect()->route('register.success');
    }

    public function success()
    {
        return view('registration.success');
    }
}

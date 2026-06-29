<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Dashboard - Jernih Multi Komunikasi</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-error-container": "#93000a",
                        "inverse-primary": "#adc6ff",
                        "secondary-fixed": "#ffdcbf",
                        "primary": "#0058bc",
                        "on-tertiary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "surface-bright": "#f9f9fe",
                        "on-tertiary-fixed-variant": "#00504c",
                        "surface-container-low": "#f3f3f8",
                        "on-secondary-fixed": "#2d1600",
                        "on-secondary": "#ffffff",
                        "on-primary-container": "#fefcff",
                        "tertiary-container": "#00837c",
                        "primary-fixed-dim": "#adc6ff",
                        "on-tertiary-container": "#f3fffd",
                        "surface-container": "#ededf2",
                        "outline": "#717786",
                        "background": "#f9f9fe",
                        "on-background": "#1a1c1f",
                        "error": "#ba1a1a",
                        "on-surface": "#1a1c1f",
                        "on-error": "#ffffff",
                        "surface-variant": "#e2e2e7",
                        "secondary-fixed-dim": "#ffb874",
                        "on-primary-fixed": "#001a41",
                        "on-secondary-container": "#633700",
                        "error-container": "#ffdad6",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#00201e",
                        "inverse-surface": "#2e3034",
                        "inverse-on-surface": "#f0f0f5",
                        "tertiary": "#006762",
                        "secondary": "#8c5000",
                        "surface-dim": "#d9dade",
                        "surface-tint": "#005bc1",
                        "surface-container-high": "#e8e8ed",
                        "primary-fixed": "#d8e2ff",
                        "surface-container-highest": "#e2e2e7",
                        "on-secondary-fixed-variant": "#6a3b00",
                        "surface": "#f9f9fe",
                        "primary-container": "#0070eb",
                        "outline-variant": "#c1c6d7",
                        "tertiary-fixed": "#61f9ef",
                        "on-surface-variant": "#414755",
                        "on-primary-fixed-variant": "#004493",
                        "secondary-container": "#fe9400",
                        "tertiary-fixed-dim": "#39dcd2"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "form-element-gap": "1.25rem",
                        "container-max-width": "640px",
                        "gutter": "1.5rem",
                        "stack-gap": "1rem",
                        "section-padding": "2rem"
                    },
                    "fontFamily": {
                        "label-sm": ["Inter"],
                        "headline-md": ["Montserrat"],
                        "display-lg": ["Montserrat"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-sm": ["Montserrat"],
                        "display-lg-mobile": ["Montserrat"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "600"}],
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "display-lg-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .table-row-hover:hover {
            background-color: #f3f3f8;
        }
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #c1c6d7;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #717786;
        }
    </style>
</head>
<body class="bg-surface-bright text-on-surface font-body-md text-body-md overflow-x-hidden min-h-screen flex flex-col md:flex-row">
<!-- Sidebar Navigation (Desktop) -->
<aside class="hidden md:flex flex-col w-64 bg-surface-container border-r border-outline-variant h-screen sticky top-0">
<div class="px-6 py-8">
<h1 class="font-display-lg-mobile text-display-lg-mobile text-primary tracking-tight">Jernih</h1>
<p class="text-label-sm font-label-sm text-on-surface-variant opacity-70 mt-1 uppercase tracking-widest">Admin Portal</p>
</div>
<nav class="flex-1 px-4 space-y-2 mt-4">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary-container text-on-primary-container font-bold" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<form method="POST" action="{{ route('admin.logout') }}" class="block">
  @csrf
  <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-colors">
    <span class="material-symbols-outlined">logout</span>
    <span class="font-label-md text-label-md text-left">Keluar</span>
  </button>
</form>
</nav>
<div class="p-6">
<div class="flex items-center gap-3 p-3 bg-surface-container-high rounded-xl">
<div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary font-bold">A</div>
<div>
<p class="font-label-md text-label-md text-on-surface">Admin Utama</p>
<p class="text-label-sm font-label-sm text-on-surface-variant">{{ Auth::user()->email }}</p>
</div>
</div>
</div>
</aside>
<!-- Mobile TopBar -->
<header class="md:hidden flex justify-between items-center px-gutter py-4 bg-surface-bright sticky top-0 z-50 border-b border-outline-variant">
<h1 class="font-display-lg-mobile text-display-lg-mobile text-primary tracking-tight">Jernih</h1>
<div class="flex items-center gap-2">
  <form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit" class="p-2 text-on-surface hover:text-error transition-colors">
      <span class="material-symbols-outlined">logout</span>
    </button>
  </form>
</div>
</header>
<!-- Main Content Canvas -->
<main class="flex-1 w-full max-w-7xl mx-auto px-gutter py-8 md:py-10">
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
<div>
<h2 class="font-headline-md text-headline-md text-on-surface">Data Registrasi Pelanggan</h2>
<p class="text-on-surface-variant font-body-md">Kelola dan monitor data pendaftaran pelanggan Jernih Multi Komunikasi.</p>
</div>
<a href="{{ route('admin.export') }}" class="flex items-center justify-center gap-2 px-5 py-3 bg-secondary-container text-on-secondary-container rounded-full font-bold hover:shadow-lg transition-all active:scale-95 group">
  <span class="material-symbols-outlined">download</span>
  <span class="font-label-md text-label-md">Export CSV</span>
</a>
<a href="{{ route('admin.export.pdf') }}" class="flex items-center justify-center gap-2 px-5 py-3 bg-error-container text-on-error-container rounded-full font-bold hover:shadow-lg transition-all active:scale-95 group">
  <span class="material-symbols-outlined">picture_as_pdf</span>
  <span class="font-label-md text-label-md">Export PDF + Gambar</span>
</a>
</div>
<!-- Statistics Row -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
<!-- Stat Card 1 -->
<div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-center justify-between mb-4">
<span class="p-2 bg-primary-fixed text-on-primary-fixed rounded-lg material-symbols-outlined">group_add</span>
</div>
<p class="text-on-surface-variant font-label-md mb-1">Total Registrasi</p>
<h3 class="font-headline-md text-headline-md text-on-surface">{{ $totalRegistrations }}</h3>
</div>
<!-- Stat Card 2 -->
<div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-center justify-between mb-4">
<span class="p-2 bg-secondary-fixed text-on-secondary-fixed rounded-lg material-symbols-outlined">today</span>
</div>
<p class="text-on-surface-variant font-label-md mb-1">Registrasi Hari Ini</p>
<h3 class="font-headline-md text-headline-md text-on-surface">{{ $todayRegistrations }}</h3>
</div>
<!-- Stat Card 3 -->
<div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-center justify-between mb-4">
<span class="p-2 bg-tertiary-fixed text-on-tertiary-fixed rounded-lg material-symbols-outlined">calendar_month</span>
</div>
<p class="text-on-surface-variant font-label-md mb-1">Registrasi Bulan Ini</p>
<h3 class="font-headline-md text-headline-md text-on-surface">{{ $thisMonthRegistrations }}</h3>
</div>
</div>
<!-- Table Container -->
<div class="bg-surface-container-lowest rounded-2xl border border-outline-variant overflow-hidden shadow-sm">
<!-- Table Controls -->
<div class="p-4 md:p-6 flex flex-col md:flex-row md:items-center justify-between gap-4 bg-surface-container-low border-b border-outline-variant">
<form method="GET" action="{{ route('admin.dashboard') }}" class="relative flex-1 max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
<input name="search" class="w-full pl-10 pr-4 py-2 bg-surface-bright border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary focus:border-primary transition-all text-body-md outline-none" placeholder="Cari nama, ID, atau telepon..." type="text" value="{{ request('search') }}"/>
</form>
</div>
<!-- Main Table -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse min-w-[1000px]">
<thead>
<tr class="bg-surface-container-low">
<th class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs w-16">No</th>
<th class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs">Nama Lengkap</th>
<th class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs">Nomor Telepon</th>
<th class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs">Nomor ID</th>
<th class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs">Biaya Langganan</th>
<th class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs">Tanggal Registrasi</th>
<th class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs">Alamat</th>
<th class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs">Bukti Upload</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
@forelse($registrations as $reg)
<tr class="table-row-hover transition-colors">
<td class="px-6 py-4 text-on-surface-variant font-bold">
  {{ $loop->iteration + ($registrations->currentPage() - 1) * $registrations->perPage() }}
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center font-bold text-xs">
  {{ strtoupper(substr($reg->nama, 0, 2)) }}
</div>
<span class="font-label-md text-on-surface">{{ $reg->nama }}</span>
</div>
</td>
<td class="px-6 py-4">
  @php
    $waPhone = preg_replace('/[^0-9]/', '', $reg->no_telepon);
    if (str_starts_with($waPhone, '0')) {
        $waPhone = '62' . substr($waPhone, 1);
    }
  @endphp
  <a href="https://wa.me/{{ $waPhone }}" target="_blank" class="text-primary hover:underline font-medium inline-flex items-center gap-1">
    <span class="material-symbols-outlined text-sm">chat</span> {{ $reg->no_telepon }}
  </a>
</td>
<td class="px-6 py-4 text-on-surface-variant">{{ $reg->nomor_id }}</td>
<td class="px-6 py-4 text-on-surface">{{ $reg->biaya_langganan }}</td>
<td class="px-6 py-4 text-on-surface-variant">{{ $reg->created_at->format('d M Y') }}</td>
<td class="px-6 py-4 text-on-surface-variant max-w-xs truncate" title="{{ $reg->alamat }}">{{ $reg->alamat }}</td>
<td class="px-6 py-4">
  <div class="flex flex-wrap gap-2">
    @if($reg->bukti_ig)
      <div class="flex flex-col items-center">
        <img src="{{ asset('storage/' . $reg->bukti_ig) }}" onclick="showImageModal('{{ asset('storage/' . $reg->bukti_ig) }}', 'Bukti Instagram')" class="w-12 h-12 object-cover rounded shadow-sm border border-outline-variant cursor-pointer hover:scale-105 transition-transform" alt="IG">
        <span class="text-[9px] text-on-surface-variant mt-0.5 font-bold">IG</span>
      </div>
    @endif
    @if($reg->bukti_tiktok_jernih)
      <div class="flex flex-col items-center">
        <img src="{{ asset('storage/' . $reg->bukti_tiktok_jernih) }}" onclick="showImageModal('{{ asset('storage/' . $reg->bukti_tiktok_jernih) }}', 'Bukti TikTok @jernih.net')" class="w-12 h-12 object-cover rounded shadow-sm border border-outline-variant cursor-pointer hover:scale-105 transition-transform" alt="TT Jernih">
        <span class="text-[9px] text-on-surface-variant mt-0.5 font-bold">Jernih</span>
      </div>
    @endif
    @if($reg->bukti_tiktok_creatif)
      <div class="flex flex-col items-center">
        <img src="{{ asset('storage/' . $reg->bukti_tiktok_creatif) }}" onclick="showImageModal('{{ asset('storage/' . $reg->bukti_tiktok_creatif) }}', 'Bukti TikTok @jernihcreatif')" class="w-12 h-12 object-cover rounded shadow-sm border border-outline-variant cursor-pointer hover:scale-105 transition-transform" alt="TT Creatif">
        <span class="text-[9px] text-on-surface-variant mt-0.5 font-bold">Creatif</span>
      </div>
    @endif
    @if($reg->bukti_gmaps)
      <div class="flex flex-col items-center">
        <img src="{{ asset('storage/' . $reg->bukti_gmaps) }}" onclick="showImageModal('{{ asset('storage/' . $reg->bukti_gmaps) }}', 'Bukti Google Maps')" class="w-12 h-12 object-cover rounded shadow-sm border border-outline-variant cursor-pointer hover:scale-105 transition-transform" alt="GMaps">
        <span class="text-[9px] text-on-surface-variant mt-0.5 font-bold">GMaps</span>
      </div>
    @endif
  </div>
</td>
</tr>
@empty
<tr>
  <td colspan="8" class="px-6 py-10 text-center text-on-surface-variant">Tidak ada data registrasi.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
<!-- Table Footer / Pagination -->
<div class="px-6 py-4 bg-surface-container-low border-t border-outline-variant flex flex-col md:flex-row md:items-center justify-between gap-4">
<p class="text-label-sm font-label-sm text-on-surface-variant">
  Menampilkan {{ $registrations->firstItem() ?? 0 }}-{{ $registrations->lastItem() ?? 0 }} dari {{ $registrations->total() }} data
</p>
<div class="flex items-center gap-2">
  {{ $registrations->appends(request()->query())->links() }}
</div>
</div>
</div>
<!-- Footer -->
<footer class="mt-16 py-8 flex flex-col items-center gap-2 text-center">
<div class="font-label-md text-label-md text-on-surface">Jernih Multi Komunikasi</div>
<p class="font-label-sm text-label-sm text-on-surface-variant opacity-70">
                © 2026 Jernih Multi Komunikasi.
            </p>
</footer>
</main>

<!-- Modal for Viewing Images (Lightbox Style) -->
<div id="image-modal" class="fixed inset-0 bg-black/90 z-50 flex flex-col items-center justify-center hidden" onclick="closeImageModal()">
  <!-- Top bar -->
  <div class="w-full flex items-center justify-between px-6 py-3 absolute top-0 left-0 z-10" onclick="event.stopPropagation()">
    <h3 id="modal-title" class="text-white text-lg font-semibold drop-shadow"></h3>
    <button onclick="closeImageModal()" class="text-white hover:text-gray-300 transition-colors bg-white/10 hover:bg-white/20 p-2 rounded-full">
      <span class="material-symbols-outlined text-3xl">close</span>
    </button>
  </div>
  <!-- Image -->
  <div class="flex items-center justify-center w-full h-full pt-14 pb-6 px-6" onclick="event.stopPropagation()">
    <img id="modal-img" src="" alt="Bukti Upload" style="max-height:90vh; max-width:100%; object-fit:contain; display:block; border-radius:12px; box-shadow:0 8px 40px rgba(0,0,0,0.7);">
  </div>
</div>

<script>
function showImageModal(src, title) {
  document.getElementById('modal-img').src = src;
  document.getElementById('modal-title').textContent = title;
  document.getElementById('image-modal').classList.remove('hidden');
  document.body.style.overflow = 'hidden';
}

function closeImageModal() {
  document.getElementById('image-modal').classList.add('hidden');
  document.getElementById('modal-img').src = '';
  document.body.style.overflow = '';
}
</script>
</body>
</html>

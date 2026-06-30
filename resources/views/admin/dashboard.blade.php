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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
<th class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs text-center">Aksi</th>
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
<td class="px-6 py-4 text-center">
  <button
    onclick="confirmDelete('{{ route('admin.registrations.destroy', $reg->id) }}', '{{ addslashes($reg->nama) }}')"
    class="inline-flex items-center gap-1 px-3 py-1.5 bg-error-container text-on-error-container text-xs font-bold rounded-lg hover:bg-red-200 transition-colors"
    title="Hapus data ini"
  >
    <span class="material-symbols-outlined text-base">delete</span>
    Hapus
  </button>
</td>
</tr>
@empty
<tr>
  <td colspan="9" class="px-6 py-10 text-center text-on-surface-variant">Tidak ada data registrasi.</td>
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
<!-- Success Toast -->
@if(session('success'))
<div id="toast-success" class="fixed top-6 right-6 z-50 flex items-center gap-3 bg-white border border-green-200 text-green-800 px-5 py-4 rounded-2xl shadow-xl max-w-sm" role="alert">
  <span class="material-symbols-outlined text-green-600 text-2xl">check_circle</span>
  <span class="text-sm font-semibold">{{ session('success') }}</span>
  <button onclick="document.getElementById('toast-success').remove()" class="ml-auto text-green-400 hover:text-green-700">
    <span class="material-symbols-outlined text-lg">close</span>
  </button>
</div>
<script>setTimeout(()=>{const t=document.getElementById('toast-success');if(t)t.remove();},4000);</script>
@endif

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

<!-- Delete Confirmation Modal -->
<div id="delete-modal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 flex items-center justify-center hidden">
  <div class="bg-white rounded-2xl max-w-sm w-full mx-4 p-6 shadow-2xl flex flex-col items-center gap-4">
    <div class="w-14 h-14 rounded-full bg-error-container flex items-center justify-center">
      <span class="material-symbols-outlined text-3xl text-on-error-container">delete_forever</span>
    </div>
    <h3 class="text-lg font-bold text-on-surface text-center">Hapus Data Pelanggan?</h3>
    <p class="text-sm text-on-surface-variant text-center" id="delete-modal-name"></p>
    <p class="text-xs text-error text-center">Data dan semua bukti gambar akan dihapus permanen dan tidak bisa dipulihkan.</p>
    <div class="flex gap-3 w-full mt-2">
      <button onclick="closeDeleteModal()" class="flex-1 py-2.5 rounded-xl border border-outline-variant text-on-surface font-semibold hover:bg-surface-container transition-colors text-sm">
        Batal
      </button>
      <form id="delete-form" method="POST" class="flex-1">
        @csrf
        @method('DELETE')
        <button type="submit" class="w-full py-2.5 rounded-xl bg-error text-white font-bold hover:bg-red-700 transition-colors text-sm">
          Ya, Hapus
        </button>
      </form>
    </div>
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

function confirmDelete(url, name) {
  document.getElementById('delete-form').action = url;
  document.getElementById('delete-modal-name').textContent = 'Anda akan menghapus data "' + name + '".';
  document.getElementById('delete-modal').classList.remove('hidden');
  document.body.style.overflow = 'hidden';
}

function closeDeleteModal() {
  document.getElementById('delete-modal').classList.add('hidden');
  document.body.style.overflow = '';
}
</script>
</body>
</html>

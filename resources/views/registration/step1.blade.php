<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Registrasi Data Pelanggan - Jernih Multi Komunikasi</title>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

<style>
body { background: linear-gradient(180deg, #FFFFFF 0%, #F2F2F7 100%); min-height: 100vh; }
.main-card { box-shadow: 0px 20px 40px rgba(0,0,0,0.05); }
.material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
.progress-pulse { animation: pulse 2s infinite; }
@keyframes pulse { 0%{transform:scale(1);opacity:1} 50%{transform:scale(1.2);opacity:0.7} 100%{transform:scale(1);opacity:1} }
</style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col">
<main class="flex-grow flex flex-col items-center justify-center px-4 py-6 sm:py-section-padding">
  <div class="w-full max-w-container-max-width main-card bg-surface-container-lowest rounded-xl overflow-hidden">
    <!-- Step Indicator -->
    <div class="px-4 pt-5 pb-2">
      <div class="flex items-center justify-between mb-2">
        <span class="font-label-md text-label-md text-primary">Langkah 2 dari 4</span>
        <span class="font-label-sm text-label-sm text-on-surface-variant">Data Pelanggan</span>
      </div>
      <div class="flex gap-1.5 h-1.5 w-full">
        <div class="flex-1 bg-primary rounded-full"></div>
        <div class="flex-1 bg-primary rounded-full relative overflow-hidden">
          <div class="absolute inset-0" style="background:linear-gradient(90deg,transparent,rgba(255,255,255,0.4),transparent);width:200%;animation:shimmer 2s infinite linear;"></div>
        </div>
        <div class="flex-1 bg-surface-container-highest rounded-full"></div>
        <div class="flex-1 bg-surface-container-highest rounded-full"></div>
      </div>
    </div>

    <!-- Header -->
    <div class="px-5 sm:px-8 py-4 text-center">
      <h2 class="font-headline-md text-headline-md text-on-surface mb-2">Registrasi Data Pelanggan</h2>
      <p class="font-body-md text-body-md text-on-surface-variant">Silakan lengkapi data diri Anda di bawah ini untuk melanjutkan ekspedisi Anda.</p>
    </div>

    <!-- Form -->
    <form class="px-5 sm:px-8 pb-10 space-y-form-element-gap" method="POST" action="{{ route('register.step1.store') }}">
      @csrf

      @if($errors->any())
      <div class="bg-red-50 border border-red-200 rounded-lg p-4 text-sm text-red-700">
        @foreach($errors->all() as $error)<div>• {{ $error }}</div>@endforeach
      </div>
      @endif

      <!-- Nama Lengkap -->
      <div class="relative group">
        <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-primary z-10">
          <span class="material-symbols-outlined">person</span>
        </div>
        <input class="block w-full pl-12 pr-4 py-4 bg-surface-container-lowest border-2 border-primary rounded-lg focus:ring-2 focus:ring-primary transition-all font-body-md text-body-md text-on-surface outline-none" id="nama" name="nama" placeholder=" " type="text" value="{{ old('nama') }}" required>
        <label class="absolute left-10 -top-2.5 px-2 bg-surface-container-lowest pointer-events-none font-label-md text-label-md text-primary z-20" for="nama">Nama Lengkap</label>
      </div>

      <!-- Nomor Telepon -->
      <div class="relative group">
        <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-primary z-10">
          <span class="material-symbols-outlined">call</span>
        </div>
        <input class="block w-full pl-12 pr-4 py-4 bg-surface-container-lowest border-2 border-primary rounded-lg focus:ring-2 focus:ring-primary transition-all font-body-md text-body-md text-on-surface outline-none" id="no_telepon" name="no_telepon" placeholder=" " type="tel" value="{{ old('no_telepon') }}" required>
        <label class="absolute left-10 -top-2.5 px-2 bg-surface-container-lowest pointer-events-none font-label-md text-label-md text-primary z-20" for="no_telepon">Nomor Telepon (WhatsApp)</label>
      </div>

      <!-- Nomor ID -->
      <div class="relative group">
        <div class="absolute top-0 left-4 h-[56px] flex items-center pointer-events-none text-primary z-10">
          <span class="material-symbols-outlined">badge</span>
        </div>
        <input class="block w-full pl-12 pr-4 py-4 bg-surface-container-lowest border-2 border-primary rounded-lg focus:ring-2 focus:ring-primary transition-all font-body-md text-body-md text-on-surface outline-none" id="nomor_id" name="nomor_id" placeholder=" " type="text" value="{{ old('nomor_id') }}" required>
        <label class="absolute left-10 -top-2.5 px-2 bg-surface-container-lowest pointer-events-none font-label-md text-label-md text-primary z-20" for="nomor_id">Nomor ID</label>
        <p class="mt-1.5 font-label-sm text-label-sm text-on-surface-variant">
          Jika lupa nomor ID, buka aplikasi <strong>Smart JMK</strong> atau kunjungi
          <a href="https://layanan.jernih.net.id" target="_blank" class="text-primary underline hover:text-primary-container">layanan.jernih.net.id</a>
        </p>
      </div>

      <!-- Biaya Langganan -->
      <div class="relative group">
        <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-primary z-10">
          <span class="material-symbols-outlined">sell</span>
        </div>
        <input class="block w-full pl-12 pr-4 py-4 bg-surface-container-lowest border-2 border-primary rounded-lg focus:ring-2 focus:ring-primary transition-all font-body-md text-body-md text-on-surface outline-none" id="biaya_langganan" name="biaya_langganan" placeholder=" " type="text" value="{{ old('biaya_langganan') }}" required>
        <label class="absolute left-10 -top-2.5 px-2 bg-surface-container-lowest pointer-events-none font-label-md text-label-md text-primary z-20" for="biaya_langganan">Biaya Langganan</label>
      </div>

      <!-- Alamat -->
      <div class="relative group">
        <div class="absolute top-4 left-4 flex items-start pointer-events-none text-primary z-10">
          <span class="material-symbols-outlined">location_on</span>
        </div>
        <textarea class="block w-full pl-12 pr-4 py-4 bg-surface-container-lowest border-2 border-primary rounded-lg focus:ring-2 focus:ring-primary transition-all font-body-md text-body-md text-on-surface outline-none resize-none" id="alamat" name="alamat" placeholder=" " rows="3" required>{{ old('alamat') }}</textarea>
        <label class="absolute left-10 -top-2.5 px-2 bg-surface-container-lowest pointer-events-none font-label-md text-label-md text-primary z-20" for="alamat">Alamat Lengkap Sesuai KTP</label>
      </div>

      <!-- Submit -->
      <div class="pt-4">
        <button class="w-full bg-primary hover:bg-primary-container text-white font-headline-sm text-headline-sm py-4 px-8 rounded-full shadow-lg active:scale-95 transition-all duration-150 flex items-center justify-center gap-2 group" type="submit">
          Selanjutnya
          <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </button>
        <p class="mt-4 text-center font-label-sm text-label-sm text-on-surface-variant opacity-70">Keamanan data Anda adalah prioritas kami.</p>
      </div>
    </form>
  </div>
</main>

<footer class="w-full py-section-padding flex flex-col items-center gap-2 bg-transparent">
  <div class="font-label-md text-label-md text-on-surface">Jernih Multi Komunikasi</div>
  <p class="font-label-sm text-label-sm text-on-surface-variant opacity-70">© 2026 Jernih Multi Komunikasi.</p>
  <div class="flex gap-4 mt-2">
    <a class="font-label-sm text-label-sm text-on-surface-variant opacity-70 hover:text-primary transition-colors" href="#">Bantuan</a>
    <a class="font-label-sm text-label-sm text-on-surface-variant opacity-70 hover:text-primary transition-colors" href="#">Syarat &amp; Ketentuan</a>
  </div>
</footer>

<script>
const inputs = document.querySelectorAll('input, textarea');
inputs.forEach(input => {
  input.addEventListener('focus', () => input.closest('.group').classList.add('scale-[1.01]'));
  input.addEventListener('blur', () => input.closest('.group').classList.remove('scale-[1.01]'));
});
</script>
</body>
</html>

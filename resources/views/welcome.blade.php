<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Jernih Multi Komunikasi - Registrasi Ulang</title>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

<style>
.material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
.main-card-shadow { box-shadow: 0px 20px 40px rgba(0,0,0,0.05); }
.bg-gradient-soft { background: linear-gradient(180deg, #FFFFFF 0%, #F2F2F7 100%); }
.progress-pulse { animation: pulse 2s cubic-bezier(0.4,0,0.6,1) infinite; }
@keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.7;transform:scale(1.1)} }
</style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-soft min-h-screen flex flex-col text-on-surface">

<main class="flex-grow flex flex-col">
  <div class="w-full bg-white flex flex-col">

    <!-- Hero full dari atas + step indicator overlay -->
    <div class="relative w-full" style="height: 260px;">
      <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGdinin56ftjQdLmQ5H8gyludXkNSpbjw-Kig9K6rb-FQXmtAKiGQlfMmaE_ZmEbRqjzR2_W4sPG0KD1HnZjgh4U6SK0vJoUTRR3KV8_T_Bi3gn-FUbk6ALXBbBikAv_o8Kuuwthp6o4_qhqi-p7C6busbkUG5FlsDA2f_F8HAGXIJ4SZlokxtFmKTFwUYu1OEP87Tl82JCBTQgQtepUaiPzOsP8bMuGDnfD4w82kY-f4x0y9z3Cd-4gnhPHw2jOYO0DU6Le-wpGDk" alt="Gunung Bromo">
      <div class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-black/30"></div>
      <!-- Step indicator di atas gambar -->
      <div class="absolute top-4 left-4 right-4">
        <div class="flex items-center justify-between mb-2">
          <span class="text-[11px] font-semibold text-white drop-shadow">Langkah 1 dari 4</span>
          <span class="text-[10px] text-white/80 drop-shadow">Selamat Datang</span>
        </div>
        <div class="flex gap-1.5 h-1.5 w-full">
          <div class="flex-1 bg-white rounded-full relative overflow-hidden">
            <div class="absolute inset-0 bg-white/50 progress-pulse"></div>
          </div>
          <div class="flex-1 bg-white/40 rounded-full"></div>
          <div class="flex-1 bg-white/40 rounded-full"></div>
          <div class="flex-1 bg-white/40 rounded-full"></div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="px-4 pb-8 flex flex-col gap-6 -mt-8 relative z-10">
      <div class="flex flex-col gap-2 text-center">
        <h2 class="font-headline-md text-headline-md text-on-surface">Halo, selamat datang 👋</h2>
        <p class="font-body-md text-body-md text-on-surface-variant">Satu langkah lagi menuju petualangan tak terlupakan.</p>
      </div>

      <div class="bg-surface-container-low p-6 rounded-2xl flex flex-col gap-4 border border-outline-variant/30">
        <div class="flex gap-4">
          <span class="material-symbols-outlined text-primary mt-1" style="font-variation-settings:'FILL' 1">verified</span>
          <p class="font-body-md text-body-md text-on-surface-variant">Kami mengajak Anda untuk melakukan registrasi ulang data pelanggan. Tujuannya agar data pelanggan tetap valid dan terbaru.</p>
        </div>
        <div class="flex gap-4">
          <span class="material-symbols-outlined text-secondary mt-1" style="font-variation-settings:'FILL' 1">card_giftcard</span>
          <p class="font-body-md text-body-md text-on-surface-variant">Sebagai bentuk apresiasi, pelanggan yang sudah melakukan registrasi ulang akan mendapatkan kesempatan mengikuti undian berhadiah <span class="font-bold text-secondary">kuota liburan gratis ke Bromo</span>.</p>
        </div>

        <div class="flex gap-4">
          <span class="material-symbols-outlined text-primary mt-1" style="font-variation-settings:'FILL' 1">speed</span>
          <p class="font-body-md text-body-md text-on-surface-variant">Bagi pelanggan setia yang telah bergabung lebih dari 8 bulan, nikmati juga <span class="font-bold text-primary">tambahan kecepatan 10 Mbps</span> sebagai apresiasi loyalitas Anda.</p>
        </div>
        <div class="flex gap-4">
          <span class="material-symbols-outlined text-tertiary mt-1" style="font-variation-settings:'FILL' 1">info</span>
          <p class="font-body-md text-body-md text-on-surface-variant italic opacity-80">Bagi pelanggan yang sebelumnya sudah diregistrasi oleh petugas saat kunjungan (visit), data Anda otomatis terdaftar sebagai peserta undian.</p>
        </div>
      </div>

      <div class="flex flex-col items-center gap-4 pt-4">
        <p class="font-body-md text-body-md text-on-surface text-center">Terima kasih dan semoga beruntung! 🎉</p>
        <a href="{{ route('register.step1') }}" class="w-full bg-primary text-on-primary font-bold py-4 px-8 rounded-full shadow-lg hover:bg-primary-container transition-all active:scale-95 duration-150 flex justify-center items-center gap-2 group">
          Daftar Sekarang
          <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </a>
      </div>
    </div>
  </div>
</main>

<footer class="w-full py-section-padding flex flex-col items-center gap-2 bg-transparent">
  <div class="flex gap-6 mb-2">
    <a class="text-on-surface-variant opacity-70 font-label-sm text-label-sm hover:text-primary transition-colors" href="#">Bantuan</a>
    <a class="text-on-surface-variant opacity-70 font-label-sm text-label-sm hover:text-primary transition-colors" href="#">Syarat &amp; Ketentuan</a>
  </div>
  <div class="font-label-md text-label-md text-on-surface">Jernih Multi Komunikasi</div>
  <p class="text-on-surface-variant font-label-sm text-label-sm">© 2026 Jernih Multi Komunikasi.</p>
</footer>
</body>
</html>

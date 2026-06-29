<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Jernih Multi Komunikasi - Selesaikan Langkah Terakhir!</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<script id="tailwind-config">
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        "surface-bright": "#f9f9fe","on-surface": "#1a1c1f","outline-variant": "#c1c6d7",
        "primary": "#0058bc","on-surface-variant": "#414755","secondary": "#8c5000",
        "secondary-container": "#fe9400","on-secondary-container": "#633700",
        "surface-container-lowest": "#ffffff","on-primary": "#ffffff","outline": "#717786",
        "primary-container": "#0070eb","surface-container-low": "#f3f3f8",
        "surface-container-highest": "#e2e2e7","surface-container": "#ededf2",
        "error": "#ba1a1a","error-container": "#ffdad6","on-error-container": "#93000a",
      },
      spacing: { "gutter": "1.5rem","section-padding": "2rem","container-max-width": "640px" },
      fontFamily: { "display-lg-mobile": ["Montserrat"],"label-sm": ["Inter"],"body-md": ["Inter"],"label-md": ["Inter"],"headline-md": ["Montserrat"],"headline-sm": ["Montserrat"] },
      fontSize: {
        "display-lg-mobile": ["32px", {"lineHeight":"40px","letterSpacing":"-0.02em","fontWeight":"700"}],
        "label-sm": ["12px", {"lineHeight":"16px","fontWeight":"500"}],
        "body-md": ["16px", {"lineHeight":"24px","fontWeight":"400"}],
        "label-md": ["14px", {"lineHeight":"20px","fontWeight":"600"}],
        "headline-md": ["24px", {"lineHeight":"32px","fontWeight":"600"}],
        "headline-sm": ["20px", {"lineHeight":"28px","fontWeight":"600"}],
      }
    },
  },
}
</script>
<style>
.material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
.bento-card { transition: box-shadow 0.2s ease; }
.glass-panel { background: rgba(255,255,255,0.7); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); }
@keyframes shimmer { 0%{transform:translateX(-100%)} 100%{transform:translateX(100%)} }
</style>
</head>
<body class="bg-surface-bright text-on-surface font-body-md min-h-screen flex flex-col">

<main class="flex-grow flex flex-col items-center justify-center px-gutter py-6 sm:py-section-padding">
  <div class="w-full max-w-container-max-width bg-surface-container-lowest rounded-[2rem] shadow-[0px_20px_40px_rgba(0,0,0,0.05)] overflow-hidden flex flex-col">

    <!-- Progress Indicator -->
    <div class="px-5 sm:px-8 pt-6 pb-4">
      <div class="flex items-center justify-between mb-2">
        <span class="font-label-md text-label-md text-primary">Langkah 3 dari 4</span>
        <span class="font-label-sm text-label-sm text-on-surface-variant">Hampir Selesai!</span>
      </div>
      <div class="flex gap-1.5 h-1.5 w-full">
        <div class="flex-1 bg-primary rounded-full"></div>
        <div class="flex-1 bg-primary rounded-full"></div>
        <div class="flex-1 bg-primary rounded-full relative overflow-hidden">
          <div class="absolute inset-0" style="background:linear-gradient(90deg,transparent,rgba(255,255,255,0.4),transparent);width:200%;animation:shimmer 2s infinite linear;"></div>
        </div>
        <div class="flex-1 bg-surface-container-highest rounded-full"></div>
      </div>
    </div>

    <div class="px-5 sm:px-8 pb-10">
      <div class="text-center mb-8">
        <h2 class="font-headline-md text-headline-md text-on-surface mb-2">Selesaikan Langkah Terakhir!</h2>
        <p class="font-body-md text-body-md text-on-surface-variant">Bantu kami berkembang dan dapatkan kesempatan menang yang lebih besar.</p>
      </div>

      @if($errors->any())
      <div class="bg-red-50 border border-red-200 rounded-lg p-4 text-sm text-red-700 mb-6">
        @foreach($errors->all() as $error)<div>• {{ $error }}</div>@endforeach
      </div>
      @endif

      <!-- Form submit -->
      <form method="POST" action="{{ route('register.store') }}" enctype="multipart/form-data" id="registration-form">
        @csrf
        <input type="hidden" name="follow_ig" value="1">
        <input type="hidden" name="follow_tiktok" value="1">
        <input type="hidden" name="review_gmaps" value="1">
        <input type="hidden" name="confirmed" id="confirmed-input" value="0">

        <!-- Client-side Error Container -->
        <div id="js-errors" class="hidden bg-red-50 border border-red-200 rounded-lg p-4 text-sm text-red-700 mb-6"></div>

      <!-- Bento Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">

        <!-- Instagram -->
        <div class="bento-card glass-panel p-5 rounded-2xl flex flex-col gap-3 group cursor-pointer">
          <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-[#f9ce34] via-[#ee2a7b] to-[#6228d7] flex items-center justify-center text-white">
              <span class="material-symbols-outlined text-2xl">photo_camera</span>
            </div>
            <span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">open_in_new</span>
          </div>
          <div>
            <h3 class="font-label-md text-label-md text-on-surface">Follow Instagram</h3>
            <p class="text-xs text-on-surface-variant">Update harian seputar Jernih.</p>
          </div>
          <a class="bg-primary text-white font-label-md text-label-md py-2 px-4 rounded-lg text-center hover:bg-primary-container transition-colors" href="https://www.instagram.com/jernihnet?igsh=a3NnYWdwaGVvYmpp" target="_blank">Follow @jernihnet</a>
          <div class="border border-dashed border-outline-variant rounded-lg py-2 px-3 flex items-center justify-center cursor-pointer hover:bg-primary/5 transition-colors" onclick="this.querySelector('input').click()">
            <div class="flex flex-col items-center gap-1 w-full">
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-2xl text-primary">cloud_upload</span>
                <span class="text-sm font-bold text-primary">Unggah Bukti</span>
              </div>
              <span class="text-[10px] text-error font-bold uppercase tracking-wider" id="ig-status">Belum diunggah</span>
            </div>
            <input accept="image/*" class="hidden" type="file" name="bukti_ig" onchange="markUploaded('ig-status', this)">
          </div>
        </div>

        <!-- TikTok @jernih.net -->
        <div class="bento-card glass-panel p-5 rounded-2xl flex flex-col gap-3 group cursor-pointer">
          <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-black flex items-center justify-center text-white">
              <span class="material-symbols-outlined text-2xl">movie</span>
            </div>
            <span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">open_in_new</span>
          </div>
          <div>
            <h3 class="font-label-md text-label-md text-on-surface">Follow TikTok Jernih</h3>
            <p class="text-xs text-on-surface-variant">Update konten terbaru @jernih.net.</p>
          </div>
          <a class="bg-primary text-white font-label-md text-label-md py-2 px-4 rounded-lg text-center hover:bg-primary-container transition-colors" href="https://www.tiktok.com/@jernih.net?_r=1&_t=ZS-97cUJ0S5OM5" target="_blank">Follow @jernih.net</a>
          <div class="border border-dashed border-outline-variant rounded-lg py-2 px-3 flex items-center justify-center cursor-pointer hover:bg-primary/5 transition-colors" onclick="this.querySelector('input').click()">
            <div class="flex flex-col items-center gap-1 w-full">
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-2xl text-primary">cloud_upload</span>
                <span class="text-sm font-bold text-primary">Unggah Bukti</span>
              </div>
              <span class="text-[10px] text-error font-bold uppercase tracking-wider" id="tt-jernih-status">Belum diunggah</span>
            </div>
            <input accept="image/*" class="hidden" type="file" name="bukti_tiktok_jernih" onchange="markUploaded('tt-jernih-status', this)">
          </div>
        </div>

        <!-- TikTok @jernihcreatif -->
        <div class="bento-card glass-panel p-5 rounded-2xl flex flex-col gap-3 group cursor-pointer">
          <div class="flex items-center justify-between">
            <div class="w-10 h-10 rounded-xl bg-black flex items-center justify-center text-white">
              <span class="material-symbols-outlined text-2xl">movie</span>
            </div>
            <span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">open_in_new</span>
          </div>
          <div>
            <h3 class="font-label-md text-label-md text-on-surface">Follow TikTok Creatif</h3>
            <p class="text-xs text-on-surface-variant">Konten kreatif terbaru @jernihcreatif.</p>
          </div>
          <a class="bg-primary text-white font-label-md text-label-md py-2 px-4 rounded-lg text-center hover:bg-primary-container transition-colors" href="https://www.tiktok.com/@jernihcreatif?_r=1&_t=ZS-97cUIljFLNo" target="_blank">Follow @jernihcreatif</a>
          <div class="border border-dashed border-outline-variant rounded-lg py-2 px-3 flex items-center justify-center cursor-pointer hover:bg-primary/5 transition-colors" onclick="this.querySelector('input').click()">
            <div class="flex flex-col items-center gap-1 w-full">
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-2xl text-primary">cloud_upload</span>
                <span class="text-sm font-bold text-primary">Unggah Bukti</span>
              </div>
              <span class="text-[10px] text-error font-bold uppercase tracking-wider" id="tt-creatif-status">Belum diunggah</span>
            </div>
            <input accept="image/*" class="hidden" type="file" name="bukti_tiktok_creatif" onchange="markUploaded('tt-creatif-status', this)">
          </div>
        </div>

        <!-- Google Maps -->
        <div class="md:col-span-2 bento-card bg-surface-container-low p-6 rounded-2xl border border-primary/5 flex flex-col md:flex-row items-center gap-6">
          <div class="flex-shrink-0 w-16 h-16 rounded-full bg-white shadow-sm flex items-center justify-center">
            <span class="material-symbols-outlined text-4xl text-secondary-container" style="font-variation-settings:'FILL' 1">star</span>
          </div>
          <div class="flex-grow text-center md:text-left">
            <h3 class="font-headline-sm text-headline-sm text-on-surface">Review Bintang 5</h3>
            <p class="font-body-md text-body-md text-on-surface-variant">Berikan ulasan positif Anda di Google Maps.</p>
          </div>
          <div class="flex flex-col gap-2 w-full md:w-auto flex-shrink-0">
            <a class="flex items-center justify-center gap-2 bg-secondary-container text-on-secondary-container font-label-md text-label-md px-6 py-3 rounded-xl hover:shadow-lg transition-shadow" href="https://maps.app.goo.gl/qvdRxYDs1u5Yw8cb7" target="_blank">
              <span class="material-symbols-outlined">location_on</span> Tulis Review
            </a>
            <div class="border border-dashed border-outline-variant rounded-xl p-2 flex items-center justify-center cursor-pointer hover:bg-primary/5 transition-colors" onclick="this.querySelector('input').click()">
              <div class="flex flex-col items-center gap-1 w-full">
                <div class="flex items-center gap-2">
                  <span class="material-symbols-outlined text-2xl text-primary">cloud_upload</span>
                  <span class="text-sm font-bold text-primary">Unggah Bukti</span>
                </div>
                <span class="text-[10px] text-error font-bold uppercase tracking-wider" id="gmaps-status">Belum diunggah</span>
              </div>
              <input accept="image/*" class="hidden" type="file" name="bukti_gmaps" onchange="markUploaded('gmaps-status', this)">
            </div>
          </div>
        </div>
      </div>

      <!-- Checkbox -->
      <div class="flex items-start gap-3 p-4 bg-primary/5 rounded-xl border border-primary/10 mb-6 select-none cursor-pointer group" onclick="toggleCheck()">
        <div class="mt-1 w-5 h-5 rounded border-2 border-primary flex items-center justify-center transition-all duration-200 group-hover:bg-primary/10 flex-shrink-0" id="custom-checkbox">
          <span class="material-symbols-outlined text-primary text-sm font-bold scale-0 transition-transform duration-200" id="check-icon">check</span>
        </div>
        <label class="font-body-md text-body-md text-on-surface-variant cursor-pointer">
          Saya sudah follow Instagram, TikTok, dan memberikan review bintang 5 di Google Maps
        </label>
        <input class="hidden" id="real-checkbox" type="checkbox">
      </div>

        <div class="flex flex-col gap-3">
          <button class="w-full bg-primary text-white opacity-50 cursor-not-allowed font-label-md text-label-md py-4 rounded-full shadow-lg transition-all flex items-center justify-center gap-2 active:scale-95" disabled id="submit-btn" type="submit">
            Simpan &amp; Ikuti Undian
            <span class="material-symbols-outlined">celebration</span>
          </button>
          <a href="{{ route('register.step1') }}" class="w-full text-on-surface-variant font-label-md text-label-md py-2 hover:underline text-center">← Kembali</a>
        </div>
      </form>
    </div>
  </div>
</main>

<footer class="w-full py-section-padding flex flex-col items-center gap-2 bg-transparent">
  <div class="font-label-md text-label-md text-on-surface">Jernih Multi Komunikasi</div>
  <div class="font-label-sm text-label-sm text-on-surface-variant">© 2026 Jernih Multi Komunikasi.</div>
  <div class="flex gap-4 mt-2">
    <a class="text-on-surface-variant opacity-70 hover:text-primary transition-colors text-label-sm font-label-sm" href="#">Bantuan</a>
    <a class="text-on-surface-variant opacity-70 hover:text-primary transition-colors text-label-sm font-label-sm" href="#">Syarat &amp; Ketentuan</a>
  </div>
</footer>

<script>
function toggleCheck() {
  const checkbox = document.getElementById('real-checkbox');
  const checkIcon = document.getElementById('check-icon');
  const customBox = document.getElementById('custom-checkbox');
  const submitBtn = document.getElementById('submit-btn');
  const confirmedInput = document.getElementById('confirmed-input');
  checkbox.checked = !checkbox.checked;
  if (checkbox.checked) {
    checkIcon.classList.replace('scale-0','scale-100');
    customBox.classList.add('bg-primary');
    checkIcon.classList.replace('text-primary','text-white');
    submitBtn.disabled = false;
    submitBtn.classList.remove('opacity-50','cursor-not-allowed');
    confirmedInput.value = '1';
  } else {
    checkIcon.classList.replace('scale-100','scale-0');
    customBox.classList.remove('bg-primary');
    checkIcon.classList.replace('text-white','text-primary');
    submitBtn.disabled = true;
    submitBtn.classList.add('opacity-50','cursor-not-allowed');
    confirmedInput.value = '0';
  }
}

function markUploaded(id, input) {
  if (input.files && input.files[0]) {
    const el = document.getElementById(id);
    el.textContent = '✓ Sudah diunggah';
    el.classList.replace('text-error','text-primary');
  }
}

document.getElementById('registration-form').addEventListener('submit', function(e) {
  const ig = document.getElementsByName('bukti_ig')[0];
  const ttJernih = document.getElementsByName('bukti_tiktok_jernih')[0];
  const ttCreatif = document.getElementsByName('bukti_tiktok_creatif')[0];
  const gmaps = document.getElementsByName('bukti_gmaps')[0];
  const jsErrors = document.getElementById('js-errors');
  
  let errors = [];
  if (!ig.files || ig.files.length === 0) {
    errors.push('Bukti follow Instagram harus diunggah.');
  }
  if (!ttJernih.files || ttJernih.files.length === 0) {
    errors.push('Bukti follow TikTok @jernih.net harus diunggah.');
  }
  if (!ttCreatif.files || ttCreatif.files.length === 0) {
    errors.push('Bukti follow TikTok @jernihcreatif harus diunggah.');
  }
  if (!gmaps.files || gmaps.files.length === 0) {
    errors.push('Bukti review Google Maps harus diunggah.');
  }
  
  if (errors.length > 0) {
    e.preventDefault();
    jsErrors.innerHTML = errors.map(err => `<div>• ${err}</div>`).join('');
    jsErrors.classList.remove('hidden');
    jsErrors.scrollIntoView({ behavior: 'smooth', block: 'center' });
    return false;
  } else {
    jsErrors.classList.add('hidden');
  }
});
</script>
</body>
</html>

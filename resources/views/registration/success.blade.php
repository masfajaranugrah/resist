<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Jernih Multi Komunikasi - Registrasi Berhasil</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<script id="tailwind-config">
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        "surface-bright": "#f9f9fe","on-surface": "#1a1c1f","outline-variant": "#c1c6d7",
        "primary": "#0058bc","on-surface-variant": "#414755","secondary": "#8c5000",
        "secondary-container": "#fe9400","on-secondary-fixed": "#2d1600",
        "surface-container-lowest": "#ffffff","surface": "#f9f9fe","on-primary": "#ffffff",
        "outline": "#717786","primary-container": "#0070eb","surface-container-low": "#f3f3f8",
        "surface-container-highest": "#e2e2e7","surface-container": "#ededf2",
        "on-primary-container": "#fefcff",
      },
      spacing: { "gutter": "1.5rem","section-padding": "2rem","container-max-width": "640px" },
      fontFamily: { "display-lg-mobile": ["Montserrat"],"label-sm": ["Inter"],"body-md": ["Inter"],"label-md": ["Inter"],"headline-md": ["Montserrat"],"display-lg": ["Montserrat"] },
      fontSize: {
        "display-lg-mobile": ["32px", {"lineHeight":"40px","letterSpacing":"-0.02em","fontWeight":"700"}],
        "display-lg": ["48px", {"lineHeight":"56px","letterSpacing":"-0.02em","fontWeight":"700"}],
        "label-sm": ["12px", {"lineHeight":"16px","fontWeight":"500"}],
        "body-md": ["16px", {"lineHeight":"24px","fontWeight":"400"}],
        "body-lg": ["18px", {"lineHeight":"28px","fontWeight":"400"}],
        "label-md": ["14px", {"lineHeight":"20px","fontWeight":"600"}],
        "headline-md": ["24px", {"lineHeight":"32px","fontWeight":"600"}],
      }
    },
  },
}
</script>
<style>
.material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
.confetti-canvas { pointer-events:none; position:fixed; top:0; left:0; width:100%; height:100%; z-index:50; }
@keyframes float { 0%{transform:translateY(0px)} 50%{transform:translateY(-10px)} 100%{transform:translateY(0px)} }
.animate-float { animation: float 4s ease-in-out infinite; }
.gradient-mesh {
  background-color: #f9f9fe;
  background-image: radial-gradient(at 0% 0%, hsla(212,100%,90%,1) 0px, transparent 50%), radial-gradient(at 100% 0%, hsla(35,100%,90%,1) 0px, transparent 50%), radial-gradient(at 100% 100%, hsla(212,100%,95%,1) 0px, transparent 50%);
}
</style>
</head>
<body class="bg-surface-bright text-on-surface font-body-md overflow-x-hidden min-h-screen flex flex-col gradient-mesh">
<nav class="bg-surface-bright sticky top-0 z-40">
  <div class="flex justify-center items-center w-full px-gutter py-4 max-w-container-max-width mx-auto">
    <span class="font-display-lg-mobile text-display-lg-mobile text-primary tracking-tight">Jernih Multi Komunikasi</span>
  </div>
</nav>

<main class="flex-grow flex items-center justify-center px-4 py-12 relative">
  <canvas class="confetti-canvas" id="confetti"></canvas>
  <div class="w-full max-w-container-max-width bg-surface-container-lowest rounded-3xl overflow-hidden shadow-[0px_20px_40px_rgba(0,0,0,0.05)] relative z-10">
    <!-- Progress selesai -->
    <div class="px-5 sm:px-8 pt-6 pb-4">
      <div class="flex items-center justify-between mb-2">
        <span class="font-label-md text-label-md text-primary">Langkah 4 dari 4</span>
        <span class="font-label-sm text-label-sm text-on-surface-variant">Selesai! 🎉</span>
      </div>
      <div class="flex gap-1.5 h-1.5 w-full">
        <div class="flex-1 bg-primary rounded-full"></div>
        <div class="flex-1 bg-primary rounded-full"></div>
        <div class="flex-1 bg-primary rounded-full"></div>
        <div class="flex-1 bg-primary rounded-full"></div>
      </div>
    </div>

    <!-- Konten -->
    <div class="flex flex-col items-center text-center px-gutter py-10">
      <!-- Checkmark Icon -->
      <div class="w-24 h-24 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-6">
        <span class="material-symbols-outlined text-[64px]" style="font-variation-settings:'FILL' 1">check_circle</span>
      </div>

      <h1 class="font-headline-md text-headline-md text-on-surface mb-4">Registrasi Berhasil!</h1>
      <p class="font-body-md text-body-md text-on-surface-variant max-w-md mb-8 leading-relaxed">
        Data Anda telah kami simpan. Terima kasih telah melakukan registrasi.
      </p>

      <a href="{{ route('welcome') }}" class="w-full bg-primary text-on-primary font-bold text-body-lg px-8 py-5 rounded-full shadow-lg hover:scale-[1.02] active:scale-95 transition-all duration-150 flex items-center justify-center gap-2">
        Selesai
        <span class="material-symbols-outlined">home</span>
      </a>
    </div>
  </div>
</main>

<footer class="w-full py-section-padding flex flex-col items-center gap-2">
  <span class="font-label-md text-label-md text-on-surface">Jernih Multi Komunikasi</span>
  <p class="font-label-sm text-label-sm text-on-surface-variant">© 2026 Jernih Multi Komunikasi.</p>
  <div class="flex gap-6 mt-2">
    <a class="text-on-surface-variant opacity-70 hover:text-primary transition-colors font-label-sm text-label-sm underline" href="#">Bantuan</a>
    <a class="text-on-surface-variant opacity-70 hover:text-primary transition-colors font-label-sm text-label-sm underline" href="#">Syarat &amp; Ketentuan</a>
  </div>
</footer>

<script>
const canvas = document.getElementById('confetti');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
const colors = ['#0058bc','#fe9400','#adc6ff','#ffffff'];
class Confetti {
  constructor() {
    this.x = Math.random() * canvas.width;
    this.y = Math.random() * canvas.height - canvas.height;
    this.rotation = Math.random() * 360;
    this.color = colors[Math.floor(Math.random() * colors.length)];
    this.size = Math.random() * 8 + 4;
    this.speed = Math.random() * 3 + 2;
  }
  update() { this.y += this.speed; this.rotation += this.speed; if (this.y > canvas.height) { this.y = -20; this.x = Math.random() * canvas.width; } }
  draw() { ctx.save(); ctx.translate(this.x, this.y); ctx.rotate(this.rotation * Math.PI / 180); ctx.fillStyle = this.color; ctx.fillRect(-this.size/2, -this.size/2, this.size, this.size); ctx.restore(); }
}
const pieces = Array.from({length: 150}, () => new Confetti());
function animate() { ctx.clearRect(0,0,canvas.width,canvas.height); pieces.forEach(p => { p.update(); p.draw(); }); requestAnimationFrame(animate); }
animate();
window.addEventListener('resize', () => { canvas.width = window.innerWidth; canvas.height = window.innerHeight; });
</script>
</body>
</html>

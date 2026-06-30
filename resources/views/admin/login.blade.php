<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login | Jernih Multi Komunikasi</title>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>

<style>
        body {
            background-color: #f9f9fe;
            background-image: radial-gradient(circle at 2px 2px, rgba(0, 88, 188, 0.05) 1px, transparent 0);
            background-size: 40px 40px;
        }
        .login-card-shadow {
            box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.05);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .topographic-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.15;
            z-index: -1;
            pointer-events: none;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col font-body-md text-on-background">
<!-- Topographic Background Decoration -->
<div class="topographic-bg" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB8V-GFBoXcBYFTfySmtkkxQpZS7gUEh3YefG9EyHuHikCLLamb0leoTZOcHg-g50_LB8hGsauR-uODBMO96Yfke3FXp8bt9tpLKjL6VwgV1Gq92Y9th0su75pK3a5101-4N8KD_0K2tohe7K6Omwhq7SzWA3-8DU256Wy-ImJ8yZN14GSeCCYlaYP9n-n3wIuC-EnqK1EUajrf9IoOYpdqkYJzKQ4QNOVqYg8SQni9awOVs50j0FFcat36fEx2uVsSPLQqrXzd3lWa')"></div>
<!-- Main Content Area -->
<main class="flex-grow flex items-center justify-center px-4 py-12">
<div class="w-full max-w-[480px] bg-white rounded-xl login-card-shadow overflow-hidden p-8 md:p-12 border border-surface-container">
<!-- Logo Section -->
<div class="flex flex-col items-center mb-10">
<div class="mb-4">
<span class="material-symbols-outlined text-primary text-[48px]" style="font-variation-settings: 'FILL' 1;">mountain_flag</span>
</div>
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary text-center leading-tight">Jernih Multi Komunikasi</h1>
<p class="text-on-surface-variant font-body-md text-center mt-2">Portal Admin Masuk</p>
</div>

@if($errors->any())
<div class="bg-red-50 border border-red-200 rounded-lg p-4 text-sm text-red-700 mb-6">
  @foreach($errors->all() as $error)<div>• {{ $error }}</div>@endforeach
</div>
@endif

<!-- Login Form -->
<form action="{{ route('admin.login.submit') }}" class="space-y-6" method="POST">
@csrf
<!-- Identifier Input -->
<div class="space-y-2">
<label class="font-label-md text-on-surface-variant block" for="email">Email</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">person</span>
<input class="w-full pl-12 pr-4 py-4 bg-[#F9F9F9] border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent focus:bg-white transition-all outline-none text-on-surface font-body-md" id="email" name="email" placeholder="Masukkan email admin" type="email" value="{{ old('email') }}" required/>
</div>
</div>
<!-- Password Input -->
<div class="space-y-2">
<div class="flex justify-between items-center">
<label class="font-label-md text-on-surface-variant block" for="password">Kata Sandi</label>
</div>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">lock</span>
<input class="w-full pl-12 pr-12 py-4 bg-[#F9F9F9] border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent focus:bg-white transition-all outline-none text-on-surface font-body-md" id="password" name="password" placeholder="Masukkan kata sandi" type="password" required/>
<button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors" type="button" id="toggle-pw">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
</div>
<!-- Remember Me -->
<div class="flex items-center">
<input class="w-5 h-5 text-primary border-outline-variant rounded focus:ring-primary" id="remember" name="remember" type="checkbox"/>
<label class="ml-3 font-body-md text-on-surface-variant cursor-pointer" for="remember">Ingat Saya</label>
</div>
<!-- Submit Button -->
<button class="w-full bg-primary hover:bg-primary-container text-on-primary font-bold py-4 px-6 rounded-lg shadow-md hover:shadow-lg active:scale-[0.98] transition-all flex justify-center items-center gap-2" type="submit">
                    Masuk ke Dashboard
                    <span class="material-symbols-outlined">arrow_forward</span>
</button>
</form>
</div>
</main>
<!-- Footer (From Shared Components) -->
<footer class="w-full max-w-container-max-width mx-auto flex flex-col md:flex-row justify-center items-center gap-4 py-8">
<p class="font-label-sm text-label-sm text-outline">© 2026 Jernih Multi Komunikasi.</p>
</footer>
<script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleBtn = document.querySelector('#toggle-pw');
            const passwordInput = document.querySelector('#password');
            const icon = toggleBtn.querySelector('span');

            toggleBtn.addEventListener('click', () => {
                const isPassword = passwordInput.type === 'password';
                passwordInput.type = isPassword ? 'text' : 'password';
                icon.textContent = isPassword ? 'visibility_off' : 'visibility';
            });
        });
    </script>
</body>
</html>

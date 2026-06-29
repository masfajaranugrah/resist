<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login | Jernih Multi Komunikasi</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-dim": "#d9dade",
                        "inverse-primary": "#adc6ff",
                        "tertiary-fixed": "#61f9ef",
                        "on-secondary-container": "#633700",
                        "background": "#f9f9fe",
                        "secondary-fixed": "#ffdcbf",
                        "on-tertiary-container": "#f3fffd",
                        "primary-fixed-dim": "#adc6ff",
                        "on-primary-fixed-variant": "#004493",
                        "secondary-fixed-dim": "#ffb874",
                        "on-tertiary-fixed-variant": "#00504c",
                        "on-primary": "#ffffff",
                        "primary": "#0058bc",
                        "tertiary-container": "#00837c",
                        "on-secondary-fixed": "#2d1600",
                        "inverse-surface": "#2e3034",
                        "surface-container-lowest": "#ffffff",
                        "on-error-container": "#93000a",
                        "tertiary-fixed-dim": "#39dcd2",
                        "primary-fixed": "#d8e2ff",
                        "error": "#ba1a1a",
                        "secondary-container": "#fe9400",
                        "surface-container-highest": "#e2e2e7",
                        "surface-container-low": "#f3f3f8",
                        "on-secondary-fixed-variant": "#6a3b00",
                        "on-secondary": "#ffffff",
                        "primary-container": "#0070eb",
                        "outline-variant": "#c1c6d7",
                        "on-primary-fixed": "#001a41",
                        "secondary": "#8c5000",
                        "on-surface-variant": "#414755",
                        "surface-variant": "#e2e2e7",
                        "error-container": "#ffdad6",
                        "outline": "#717786",
                        "on-background": "#1a1c1f",
                        "on-primary-container": "#fefcff",
                        "tertiary": "#006762",
                        "on-error": "#ffffff",
                        "surface-bright": "#f9f9fe",
                        "on-surface": "#1a1c1f",
                        "surface-container": "#ededf2",
                        "surface": "#f9f9fe",
                        "surface-container-high": "#e8e8ed",
                        "inverse-on-surface": "#f0f0f5",
                        "on-tertiary": "#ffffff",
                        "surface-tint": "#005bc1",
                        "on-tertiary-fixed": "#00201e"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "1.5rem",
                        "stack-gap": "1rem",
                        "container-max-width": "640px",
                        "section-padding": "2rem",
                        "form-element-gap": "1.25rem"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "display-lg": ["Montserrat"],
                        "display-lg-mobile": ["Montserrat"],
                        "headline-md": ["Montserrat"],
                        "label-md": ["Inter"],
                        "headline-sm": ["Montserrat"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "display-lg-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "600"}],
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
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

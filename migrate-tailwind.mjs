import fs from 'fs';
import path from 'path';

const files = [
  'resources/views/admin/login.blade.php',
  'resources/views/welcome.blade.php',
  'resources/views/registration/step1.blade.php',
  'resources/views/admin/dashboard.blade.php',
  'resources/views/registration/success.blade.php',
  'resources/views/registration/step2.blade.php'
];

for (const file of files) {
  const filePath = path.join(process.cwd(), file);
  if (fs.existsSync(filePath)) {
    let content = fs.readFileSync(filePath, 'utf8');

    // Remove CDN script
    content = content.replace(/<script src="https:\/\/cdn\.tailwindcss\.com[^>]*><\/script>/g, '');

    // Remove tailwind config script block
    content = content.replace(/<script id="tailwind-config">[\s\S]*?<\/script>/g, '');

    // Insert @vite directive if not present, just before </head> or after <title>
    if (!content.includes('@vite')) {
      if (content.includes('</head>')) {
        content = content.replace('</head>', `    @vite(['resources/css/app.css', 'resources/js/app.js'])\n</head>`);
      } else {
        content = `@vite(['resources/css/app.css', 'resources/js/app.js'])\n` + content;
      }
    }

    fs.writeFileSync(filePath, content, 'utf8');
    console.log(`Processed ${file}`);
  }
}

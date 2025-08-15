<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page macOS Dock Glass</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .dock {
            background: rgba(255, 255, 255, 0.15); /* transparan */
            backdrop-filter: blur(15px) saturate(150%);
            -webkit-backdrop-filter: blur(15px) saturate(150%);
            border-radius: 20px;
            padding: 10px 14px;
            display: flex;
            gap: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .dock a {
            transition: transform 0.2s ease, background 0.3s ease;
            border-radius: 12px;
            text-align: center;
        }
        /* Hover hanya untuk desktop */
        @media (hover: hover) {
            .dock a:hover {
                transform: scale(1.2);
                background: rgba(255, 255, 255, 0.2);
            }
        }
        /* Responsif untuk layar kecil */
        @media (max-width: 640px) {
            .dock {
                gap: 8px;
                padding: 8px 10px;
                border-radius: 15px;
            }
            .dock a {
                font-size: 0.5rem;
                padding: 6px 10px;
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-200 to-gray-400 min-h-screen flex flex-col">

    <!-- Konten Tengah -->
    <main class="flex-grow flex items-center justify-center px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
            Maaf sedang dalam pengembangan 
        </h1>
    </main>

    <!-- Dock Bawah -->
    <footer class="fixed bottom-4 left-1/2 transform -translate-x-1/2">
        <div class="dock">
            <a href="#tentang" class="text-white font-medium px-4 py-2">Tentang</a>
            <a href="#indent" class="text-white font-medium px-4 py-2">indent</a>
            <a href="#menu1" class="text-white font-medium px-4 py-2">Menu 1</a>
            <a href="#menu2" class="text-white font-medium px-4 py-2">Menu 2</a>
        </div>
    </footer>

</body>
</html>

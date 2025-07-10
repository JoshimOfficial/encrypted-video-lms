<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom Styles -->
    <style>
        
        body {
            background-color: #f8fafc;
        }
        
        .dark body {
            background-color: #0f172a;
        }
                .video-container {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.3);
        }
        
        .video-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(99,102,241,0.1) 0%, rgba(168,85,247,0.1) 100%);
            z-index: 1;
            border-radius: 1rem;
        }
        
        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            transition: all 0.3s ease;
        }
        
        .play-btn:hover {
            transform: translate(-50%, -50%) scale(1.1);
        }
        
        .stat-card {
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        /* Your other custom styles from the navbar */
    </style>
</head>
<body class="bg-gray-50 dark:bg-black">
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-16">
        <div class="container mx-auto px-4 text-center">
            <p>© 2023 Ram Design. All rights reserved.</p>
            <p class="mt-2 text-gray-400">Modern UI components built with Tailwind CSS</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Your JavaScript from the navbar
    </script>
    
    @stack('scripts')
</body>
</html>
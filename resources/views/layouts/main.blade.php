<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset("css/views.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 dark:bg-black">
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer class="bg-[#0b1120cc] pt-32 pb-8 px-4 sm:px-6 lg:px-8 spcae-y-5">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 ">
                <!-- Company Info -->
                <div class="md:col-span-2">
                    <div class="flex items-center mb-4">
                        <span class="text-3xl font-bold text-rose-root">AASHA</span>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">
                        Aasha ishes nisi velutpateten, illo inne nostar veri eksi egalai architeccio vitae dicta suos epistallo neemo enne laugust alti, undo ennno itse natura.
                    </p>
                    
                    <div class="flex space-x-4">
                        <a href="#" class="bg-dark-800 p-3 w-10 h-10 rounded-full text-white flex justify-center align-middle bg-rose-root transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-dark-800 p-3 rounded-full text-white flex justify-center align-middle bg-rose-root transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="bg-dark-800 p-3 rounded-full text-white text-white flex justify-center align-middle bg-rose-root transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-dark-800 p-3 rounded-full text-white flex justify-center align-middle bg-rose-root transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <!-- About Us -->
                <div>
                    <h3 class="text-xl font-bold mb-4 text-gray-200">ABOUT US</h3>
                    <p class="text-gray-400 mb-4 max-w-xs">
                        Aasha ishes nisi velutpateten, illo inne nostar veri alti, etsi egalai architeccio vitae dicta suos
                    </p>
                    <a href="#" class="text-rose-root hover:text-indigo-300 font-medium flex items-center">
                        Learn More
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <!-- Navigation -->
                <div>
                    <h3 class="text-xl font-bold mb-4 text-gray-200">NAVIGATION</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">HOME</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">PORTFOLIO</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">SERVICES</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">TEAM MEMBER</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">CLIENT</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Divider -->
            <div class="footer-divider my-8"></div>
            
            <!-- Copyright -->
            <div class="text-center text-gray-500 text-sm">
                <p>&copy; 2023 AASHA. All rights reserved. Designed with <i class="fas fa-heart text-rose-root"></i> for creative minds.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Your JavaScript from the navbar
    </script>
    
    @stack('scripts')
</body>
</html>
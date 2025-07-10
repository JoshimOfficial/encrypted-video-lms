<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Responsive Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        dark: '#0B1120',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Noto Sans Bengali', sans-serif;
            background-color: #f8fafc;
        }
        
        .dark body {
            background-color: #0f172a;
        }
        
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #4F46E5;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
        }
        
        .mobile-menu.open {
            max-height: 1000px;
        }
        
        .dropdown-content {
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
            pointer-events: none;
        }
        
        .dropdown:hover .dropdown-content {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }
        
        .dropdown-item {
            transition: all 0.2s ease;
        }
        
        .dropdown-item:hover {
            transform: translateX(5px);
        }
        
        .hamburger span {
            display: block;
            height: 2px;
            width: 24px;
            background-color: #334155;
            margin: 4px 0;
            transition: all 0.3s ease;
        }
        
        .hamburger.active span:first-child {
            transform: translateY(6px) rotate(45deg);
        }
        
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active span:last-child {
            transform: translateY(-6px) rotate(-45deg);
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-slate-900">
    <!-- Navbar -->
    <nav class="border-general sticky top-0 z-50 border-b bg-slate-50/60 backdrop-blur-2xl transition-colors duration-500 dark:bg-[#0B1120]/80 dark:border-slate-800">
        <div class="container mx-auto px-4">
            <div class="relative flex h-16 items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/" class="flex items-center">
                            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 w-10 h-10 rounded-lg flex items-center justify-center">
                                <span class="text-white font-bold text-xl">R</span>
                            </div>
                            <span class="ml-3 text-xl font-bold text-gray-800 dark:text-white">Ram Design</span>
                        </a>
                    </div>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex lg:items-center lg:space-x-4">
                    <div class="flex space-x-2">
                        <a href="#" class="nav-link bg-gray-800 text-white rounded-md px-3 py-2 text-sm font-medium dark:bg-slate-800">Home</a>
                        
                        <!-- Dropdown 1 -->
                        <div class="dropdown relative cursor-pointer">
                            <div class="nav-link rounded-md px-3 py-2 text-sm font-medium text-slate-700 hover:bg-gray-800 hover:text-white dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-200">
                                <div class="flex items-center space-x-1">
                                    <span>About</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown relative cursor-pointer">
                            <div class="nav-link rounded-md px-3 py-2 text-sm font-medium text-slate-700 hover:bg-gray-800 hover:text-white dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-200">
                                <div class="flex items-center space-x-1">
                                    <span>Service</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown relative cursor-pointer">
                            <div class="nav-link rounded-md px-3 py-2 text-sm font-medium text-slate-700 hover:bg-gray-800 hover:text-white dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-200">
                                <div class="flex items-center space-x-1">
                                    <span>Price</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown relative cursor-pointer">
                            <div class="nav-link rounded-md px-3 py-2 text-sm font-medium text-slate-700 hover:bg-gray-800 hover:text-white dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-200">
                                <div class="flex items-center space-x-1">
                                    <span>Contact</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Dropdown 2 -->
                        {{-- <div class="dropdown relative cursor-pointer">
                            <div class="nav-link rounded-md px-3 py-2 text-sm font-medium text-slate-700 hover:bg-gray-800 hover:text-white dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-slate-200">
                                <div class="flex items-center space-x-1">
                                    <span>থিংক ইন এ রিডাক্স ওয়ে</span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="12" width="12" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="dropdown-content absolute left-0 mt-2 w-64 rounded-md shadow-lg bg-white dark:bg-slate-800 z-50">
                                <div class="py-2">
                                    <a href="#" class="dropdown-item flex items-start px-4 py-2 text-sm text-gray-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-700">
                                        <i class="fas fa-home text-violet-500 mt-1 mr-3"></i>
                                        <span>কোর্স হোম পেইজ</span>
                                    </a>
                                    <a href="#" class="dropdown-item flex items-start px-4 py-2 text-sm text-gray-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-700">
                                        <i class="fas fa-book text-yellow-400 mt-1 mr-3"></i>
                                        <span>মডিউলস</span>
                                    </a>
                                    <a href="#" class="dropdown-item flex items-start px-4 py-2 text-sm text-gray-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-700">
                                        <i class="fas fa-question-circle text-green-500 mt-1 mr-3"></i>
                                        <span>FAQ</span>
                                    </a>
                                    <a href="#" class="dropdown-item flex items-start px-4 py-2 text-sm text-gray-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-700">
                                        <i class="fas fa-info-circle text-sky-500 mt-1 mr-3"></i>
                                        <span>What to Know</span>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    
                    <!-- Desktop Buttons -->
                    <div class="flex items-center space-x-4">
                        <button id="theme-toggle" class="flex-shrink-0 p-2 rounded-full text-gray-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-700">
                            <i id="sun-icon" class="fas fa-sun hidden"></i>
                            <i id="moon-icon" class="fas fa-moon"></i>
                        </button>
                        <a href="/login" class="bg-slate-900 text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-slate-800 dark:bg-sky-600 dark:hover:bg-sky-700">
                            Login/Signup
                        </a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="flex lg:hidden items-center space-x-3">
                    <button id="theme-toggle-mobile" class="flex-shrink-0 p-2 rounded-full text-gray-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-700">
                        <i id="sun-icon-mobile" class="fas fa-sun hidden"></i>
                        <i id="moon-icon-mobile" class="fas fa-moon"></i>
                    </button>
                    <button id="menuBtn" class="hamburger p-2">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="mobile-menu lg:hidden bg-white dark:bg-[#0B1120]/80 ">
            <div class="px-2 pb-3 pt-2 space-y-1">
                <a href="#" class="block w-full rounded-md px-3 py-2 text-base font-medium text-slate-700 hover:bg-slate-700 dark:text-slate-300 dark:hover:bg-slate-700">Home</a>
                
                <!-- Mobile Dropdown 1 -->
                <div class="mt-1">
                    <button class="mobile-dropdown-btn w-full rounded-md px-3 py-2 text-base font-medium text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-700 text-left">
                        <div class="flex justify-between items-center">
                            <span>About</span>
                        </div>
                    </button>
                </div>
                <div class="mt-1">
                    <button class="mobile-dropdown-btn w-full rounded-md px-3 py-2 text-base font-medium text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-700 text-left">
                        <div class="flex justify-between items-center">
                            <span>Service</span>
                        </div>
                    </button>
                </div>
                <div class="mt-1">
                    <button class="mobile-dropdown-btn w-full rounded-md px-3 py-2 text-base font-medium text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-700 text-left">
                        <div class="flex justify-between items-center">
                            <span>Price</span>
                        </div>
                    </button>
                </div>
                <div class="mt-1">
                    <button class="mobile-dropdown-btn w-full rounded-md px-3 py-2 text-base font-medium text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-700 text-left">
                        <div class="flex justify-between items-center">
                            <span>Contact</span>
                        </div>
                    </button>
                </div>
                
                <!-- Mobile Dropdown 2 -->
                {{-- <div class="mt-1">
                    <button class="mobile-dropdown-btn w-full rounded-md px-3 py-2 text-base font-medium text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-700 text-left">
                        <div class="flex justify-between items-center">
                            <span>থিংক ইন এ রিডাক্স ওয়ে</span>
                            <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="mobile-dropdown-content pl-4 mt-1 hidden">
                        <a href="#" class="block px-3 py-2 text-sm text-slate-600 hover:bg-slate-100 dark:text-slate-400 dark:hover:bg-slate-700">
                            কোর্স হোম পেইজ
                        </a>
                        <a href="#" class="block px-3 py-2 text-sm text-slate-600 hover:bg-slate-100 dark:text-slate-400 dark:hover:bg-slate-700">
                            মডিউলস
                        </a>
                        <a href="#" class="block px-3 py-2 text-sm text-slate-600 hover:bg-slate-100 dark:text-slate-400 dark:hover:bg-slate-700">
                            FAQ
                        </a>
                        <a href="#" class="block px-3 py-2 text-sm text-slate-600 hover:bg-slate-100 dark:text-slate-400 dark:hover:bg-slate-700">
                            What to Know
                        </a>
                    </div>
                </div> --}}
                
                <!-- Mobile Login Button -->
                <div class="pt-3 px-2">
                    <a href="/login" class="block w-full text-center bg-slate-900 text-white px-4 py-2 rounded-full text-base font-medium hover:bg-slate-800 dark:bg-sky-600 dark:hover:bg-sky-700">
                        Login/Signup
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <div class="container mx-auto px-4 py-16 mt-16 text-center min-h-[150vh]">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-6">
            Modern Web Design Navigation
        </h1>
        <p class="text-lg text-gray-600 dark:text-slate-400 max-w-2xl mx-auto mb-8">
            This navigation bar is fully responsive, supports dark mode, and features a mobile-friendly interface.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <button class="px-6 py-3 bg-primary hover:bg-indigo-700 text-white font-medium rounded-lg transition">
                শুরু করুন
            </button>
            <button class="px-6 py-3 bg-white hover:bg-gray-100 text-gray-800 font-medium rounded-lg border border-gray-300 dark:bg-slate-800 dark:text-white dark:border-slate-700 dark:hover:bg-slate-700 transition">
                আরও জানুন
            </button>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-16">
        <div class="container mx-auto px-4 text-center">
            <p>© 2023 Ram Design. All rights reserved.</p>
            <p class="mt-2 text-gray-400">Modern UI components built with Tailwind CSS</p>
        </div>
    </footer>
    
    <script>
        // Theme toggle
        const themeToggle = document.getElementById('theme-toggle');
        const themeToggleMobile = document.getElementById('theme-toggle-mobile');
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');
        const sunIconMobile = document.getElementById('sun-icon-mobile');
        const moonIconMobile = document.getElementById('moon-icon-mobile');
        
        function toggleTheme() {
            const html = document.documentElement;
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.theme = 'light';
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
                sunIconMobile.classList.add('hidden');
                moonIconMobile.classList.remove('hidden');
            } else {
                html.classList.add('dark');
                localStorage.theme = 'dark';
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
                sunIconMobile.classList.remove('hidden');
                moonIconMobile.classList.add('hidden');
            }
        }
        
        themeToggle.addEventListener('click', toggleTheme);
        themeToggleMobile.addEventListener('click', toggleTheme);
        
        // Set initial theme
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
            sunIconMobile.classList.remove('hidden');
            moonIconMobile.classList.add('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
            sunIconMobile.classList.add('hidden');
            moonIconMobile.classList.remove('hidden');
        }
        
        // Mobile menu toggle
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        menuBtn.addEventListener('click', () => {
            menuBtn.classList.toggle('active');
            mobileMenu.classList.toggle('open');
        });
        
        // Mobile dropdown toggle
        const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
        
        mobileDropdownBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const content = btn.nextElementSibling;
                const icon = btn.querySelector('i');
                
                content.classList.toggle('hidden');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
            });
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!menuBtn.contains(e.target) && !mobileMenu.contains(e.target) && mobileMenu.classList.contains('open')) {
                menuBtn.classList.remove('active');
                mobileMenu.classList.remove('open');
            }
        });
    </script>
</body>
</html>
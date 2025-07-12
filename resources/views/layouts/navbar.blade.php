<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Responsive Navbar</title>
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
                    </div>
                    
                    <!-- Desktop Buttons -->
                    <div class="flex items-center space-x-4">
                        <a href="/login" class="text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-slate-800 bg-rose-root dark:hover:bg-sky-700">
                            Login/Signup
                        </a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="flex lg:hidden items-center space-x-3">
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
                
                <!-- Mobile Login Button -->
                <div class="pt-3 px-2">
                    <a href="/login" class="block w-full text-center bg-slate-900 text-white px-4 py-2 rounded-full text-base font-medium hover:bg-slate-800 dark:bg-sky-600 dark:hover:bg-sky-700">
                        Login/Signup
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <script>
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
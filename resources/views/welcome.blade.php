@extends('layouts.main')

@section('title', 'Home Page')

@section('content')

<!-- Hero Section -->
    <div class="w-full bg-cover bg-center bg-no-repeat relative" style="background-image: url('/images/hero-bg.png');">
        <section class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto h-[95vh] flex items-center">
            <div class="flex flex-col lg:flex-row items-center gap-10 justify-between w-full">
                <!-- Left Content -->
                <div class="w-full lg:w-1/2 space-y-8">
                    <div class="space-y-4">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white leading-tight">
                            Best online platform for education.
                        </h1>
                        <p class="text-lg md:text-xl text-gray-700 dark:text-gray-300">
                            Online courses from the world's leading experts. Join 17 million learners today.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="px-8 py-4 bg-rose-root hover:bg-indigo-700 text-white font-medium rounded-lg transition duration-300 shadow-lg">
                            Get started
                        </button>
                        <button class="px-8 py-4 bg-transparent border-2 border-gray-300 dark:border-gray-700 text-gray-800 dark:text-gray-200 font-medium rounded-lg transition duration-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                            How it works <span class="ml-2">💸</span>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-6 pt-4">
                        <div class="stat-card border-2 border-gray-300 dark:border-gray-700 p-5 rounded-xl shadow-md">
                            <p class="text-2xl md:text-3xl font-bold text-indigo-600 dark:text-indigo-400">260+</p>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">Tutors</p>
                        </div>
                        <div class="stat-card border-2 border-gray-300 dark:border-gray-700 p-5 rounded-xl shadow-md">
                            <p class="text-2xl md:text-3xl font-bold text-indigo-600 dark:text-indigo-400">5340+</p>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">Students</p>
                        </div>
                        <div class="stat-card border-2 border-gray-300 dark:border-gray-700 p-5 rounded-xl shadow-md">
                            <p class="text-2xl md:text-3xl font-bold text-indigo-600 dark:text-indigo-400">280+</p>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">Courses</p>
                        </div>
                    </div>
                </div>
                
                <!-- Right Video Section -->
                <div class="w-full lg:w-1/2">
                    <div class="video-container">
                        <!-- Video Placeholder with Play Button -->
                        <div class="w-full h-64 md:h-80 lg:h-96 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl"></div>
                        <div class="play-btn">
                            <div class="bg-white rounded-full p-4 shadow-2xl">
                                <i class="fas fa-play text-indigo-600 text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

{{-- About Section --}}
    <div class="min-h-screen py-8 px-4 mt-12 max-w-7xl mx-auto">
        <div class="my-4 mb-5">
            <h2 class="text-5xl text-center font-bold text-gray-900 dark:text-white">
                About Us
            </h2>
            <p class="text-center text-gray-900 dark:text-white mt-2">
                Our mission is to provide a platform for students and tutors to connect and learn from each other.
            </p>
        </div>
        <div class="grid grid-cols-2">
            <div>
                <img src="images/about-section.png" alt="">
            </div>
            <div class="">
                <div class="rounded-xl shadow-xl">
                    <div class="h-[380px] overflow-y-auto timeline-scrollbar p-4">
                        <div class="relative">
                            <!-- Timeline items -->
                            <div class="space-y-10">
                                <!-- Item 1 -->
                                <div class="timeline-item relative pl-16 md:pl-0 flex justify-end">
                                    <div class="timeline-center-line"></div>
                                    <div class="timeline-bullet bg-indigo-600">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <g><path fill="none" d="M0 0h24v24H0z"></path><path d="M14 1.5V22h-2V3.704L7.5 4.91V2.839l5-1.339z"></path></g>
                                        </svg>
                                    </div>
                                    <div class="bg-indigo-50 p-5 rounded-lg border border-indigo-100 w-[90%]">
                                        <h3 class="text-xl font-bold text-indigo-800 mb-3">প্রথম সপ্তাহ</h3>
                                        <p class="text-indigo-700 mb-4">আমরা এই সপ্তাহে দুইটি মডিউল শেষ করবো এবং রিয়্যাক্ট এর বেসিক জিনিসগুলো সম্পর্কে জানবো</p>
                                        <p class="text-indigo-700 text-sm bg-indigo-100 p-2 rounded-lg">দুটি প্রোজেক্ট করে দেখানো হবে এবং দুটি এসাইনমেন্ট</p>
                                    </div>
                                </div>
                                
                                <!-- Item 2 -->
                                <div class="timeline-item relative pl-16 md:pl-0 flex justify-end">
                                    <div class="timeline-center-line"></div>
                                    <div class="timeline-bullet bg-indigo-600">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <g><path fill="none" d="M0 0h24v24H0z"></path><path d="M16 7.5a4 4 0 1 0-8 0H6a6 6 0 1 1 10.663 3.776l-7.32 8.723L18 20v2H6v-1.127l9.064-10.802A3.982 3.982 0 0 0 16 7.5z"></path></g>
                                        </svg>
                                    </div>
                                    <div class="bg-indigo-50 p-5 rounded-lg border border-indigo-100 w-[90%]">
                                        <h3 class="text-xl font-bold text-indigo-800 mb-3">দ্বিতীয় সপ্তাহ</h3>
                                        <p class="text-indigo-700 mb-4">দ্বিতীয় সপ্তাহে আমরা স্টেট ম্যানেজমেন্ট এ ডিপ ড্রাইভ করবো</p>
                                        
                                        <p class="text-indigo-700 text-sm bg-indigo-100 p-2 rounded-lg">একটি প্রোজেক্ট করে দেখানো হবে এবং একটি এসাইনমেন্ট</p>
                                    </div>
                                </div>
                                
                                <!-- Item 3 -->
                                <div class="timeline-item relative pl-16 md:pl-0 flex justify-end">
                                    <div class="timeline-bullet bg-indigo-600">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <g><path fill="none" d="M0 0h24v24H0z"></path><path d="M18 2v1.362L12.809 9.55a6.501 6.501 0 1 1-7.116 8.028l1.94-.486A4.502 4.502 0 0 0 16.5 16a4.5 4.5 0 0 0-6.505-4.03l-.228.122-.69-1.207L14.855 4 6.5 4V2H18z"></path></g>
                                        </svg>
                                    </div>
                                    <div class="bg-indigo-50 p-5 rounded-lg border border-indigo-100 w-[90%]">
                                        <h3 class="text-xl font-bold text-indigo-800 mb-3">তৃতীয় এবং চতূর্থ সপ্তাহ</h3>
                                        <p class="text-indigo-700 mb-4">আমরা একটি মডিউল শেষ করবো এবং এডভান্স বিষয় গুলো জানবো</p>
                                        
                                        <p class="text-indigo-700 text-sm bg-indigo-100 p-2 rounded-lg">একটি প্রোজেক্ট করে দেখানো হবে এবং একটি এসাইনমেন্ট</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <body class="text-white">
    <div class="grid-bg"></div>
    
    <div class="min-h-screen flex flex-col items-center justify-center py-20 px-4 relative z-10">
        <div class="text-center mb-16 relative">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white">Our Premium Services</h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                Elevate your learning experience with our cutting-edge LMS solutions designed for the digital age
            </p>
            
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-purple-500 rounded-full filter blur-[100px] opacity-20"></div>
            <div class="absolute bottom-0 right-0 w-60 h-60 bg-blue-500 rounded-full filter blur-[100px] opacity-20"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">
            <!-- Service Card 1 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Interactive Courses</h3>
                        <p class="text-gray-300 text-center">
                            Engage with immersive content designed to maximize knowledge retention
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 2 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Expert Instructors</h3>
                        <p class="text-gray-300 text-center">
                            Learn from industry professionals with real-world experience
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 3 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Certification</h3>
                        <p class="text-gray-300 text-center">
                            Earn recognized credentials to advance your career
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 4 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Community</h3>
                        <p class="text-gray-300 text-center">
                            Connect with peers and experts in our thriving learning community
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 5 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Mobile Learning</h3>
                        <p class="text-gray-300 text-center">
                            Access courses anytime, anywhere with our mobile platform
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 6 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Analytics Dashboard</h3>
                        <p class="text-gray-300 text-center">
                            Track your progress with detailed analytics and insights
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-20 text-center">
            <button class="px-10 py-4 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-full text-xl font-bold hover:opacity-90 transition-all transform hover:scale-105">
                Explore All Services
            </button>
        </div>
    </div>
    
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-black to-transparent z-20"></div>


    <div class="min-h-screen flex items-center justify-center py-16 max-w-7xl mx-auto">
    <div class="max-w-6xl w-full px-4">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold mb-4 text-white">Simple, transparent pricing</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
                Choose the perfect plan for your needs. All plans include our core features.
            </p>
            
            <div class="flex items-center justify-center mb-12">
                <span class="text-gray-700 font-medium mr-3">Monthly billing</span>
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
                <span class="text-gray-700 font-medium ml-3 flex">
                    Annual billing
                    <span class="ml-2 px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Save 20%</span>
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Starter Plan -->
            <div class="pricing-card border border-gray-200 shadow-card hover:shadow-card-hover">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-900">Starter</h3>
                        <span class="ml-2 px-2 py-1 bg-gray-100 text-gray-800 text-xs font-medium rounded-full">Personal</span>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex items-baseline">
                            <span class="text-4xl font-bold text-gray-900">$19</span>
                            <span class="text-gray-600 ml-1">/month</span>
                        </div>
                        <p class="text-gray-500 mt-1">Billed annually or $24 month-to-month</p>
                    </div>
                    
                    <p class="text-gray-600 mb-8">
                        Perfect for individuals getting started with our platform.
                    </p>
                    
                    <button class="w-full py-3 px-4 border border-gray-300 rounded-lg font-medium text-gray-900 hover:bg-gray-50 transition-colors">
                        Get started
                    </button>
                </div>
                
                <div class="border-t border-gray-200 p-8 bg-gray-50">
                    <h4 class="font-semibold text-gray-900 mb-4">What's included</h4>
                    
                    <ul class="feature-list text-gray-700">
                        <li>Up to 5 projects</li>
                        <li>Basic analytics</li>
                        <li>1 GB storage</li>
                        <li>Email support</li>
                        <li>Standard security</li>
                        <li>Basic integrations</li>
                        <li>Community access</li>
                    </ul>
                </div>
            </div>
            
            <!-- Professional Plan (Popular) -->
            <div class="pricing-card border-2 border-primary-500 shadow-card hover:shadow-card-hover relative">
                <div class="popular-badge">Most popular</div>
                
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-900">Professional</h3>
                        <span class="ml-2 px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">Teams</span>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex items-baseline">
                            <span class="text-4xl font-bold text-gray-900">$49</span>
                            <span class="text-gray-600 ml-1">/month</span>
                        </div>
                        <p class="text-gray-500 mt-1">Billed annually or $59 month-to-month</p>
                    </div>
                    
                    <p class="text-gray-600 mb-8">
                        Ideal for growing teams that need advanced features.
                    </p>
                    
                    <button class="w-full py-3 px-4 bg-primary-600 text-white rounded-lg font-medium hover:bg-primary-700 transition-colors focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 focus:outline-none">
                        Start free trial
                    </button>
                </div>
                
                <div class="border-t border-gray-200 p-8 bg-gray-50">
                    <h4 class="font-semibold text-gray-900 mb-4">Everything in Starter, plus:</h4>
                    
                    <ul class="feature-list text-gray-700">
                        <li>Unlimited projects</li>
                        <li>Advanced analytics</li>
                        <li>10 GB storage</li>
                        <li>Priority support</li>
                        <li>Enhanced security</li>
                        <li>API access</li>
                        <li>Custom integrations</li>
                        <li>Team management</li>
                        <li>Single Sign-On (SSO)</li>
                        <li>Dedicated account manager</li>
                    </ul>
                </div>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="pricing-card border border-gray-200 shadow-card hover:shadow-card-hover">
                <div class="p-8">
                    <div class="flex items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-900">Enterprise</h3>
                        <span class="ml-2 px-2 py-1 bg-purple-100 text-purple-800 text-xs font-medium rounded-full">Business</span>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex items-baseline">
                            <span class="text-4xl font-bold text-gray-900">$99</span>
                            <span class="text-gray-600 ml-1">/month</span>
                        </div>
                        <p class="text-gray-500 mt-1">Billed annually or $119 month-to-month</p>
                    </div>
                    
                    <p class="text-gray-600 mb-8">
                        For large organizations with complex requirements.
                    </p>
                    
                    <button class="w-full py-3 px-4 border border-gray-300 rounded-lg font-medium text-gray-900 hover:bg-gray-50 transition-colors">
                        Contact sales
                    </button>
                </div>
                
                <div class="border-t border-gray-200 p-8 bg-gray-50">
                    <h4 class="font-semibold text-gray-900 mb-4">Everything in Professional, plus:</h4>
                    
                    <ul class="feature-list text-gray-700">
                        <li>Unlimited team members</li>
                        <li>Custom analytics</li>
                        <li>Unlimited storage</li>
                        <li>24/7 dedicated support</li>
                        <li>Enterprise-grade security</li>
                        <li>Custom API limits</li>
                        <li>On-premise deployment</li>
                        <li>Compliance certifications</li>
                        <li>Custom SLAs</li>
                        <li>Training sessions</li>
                        <li>Dedicated infrastructure</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.service-card');
            
            cards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const cardRect = card.getBoundingClientRect();
                    const cardCenterX = cardRect.left + cardRect.width / 2;
                    const cardCenterY = cardRect.top + cardRect.height / 2;
                    
                    const mouseX = e.clientX - cardCenterX;
                    const mouseY = e.clientY - cardCenterY;
                    
                    const rotateY = (mouseX / cardRect.width) * 20;
                    const rotateX = -(mouseY / cardRect.height) * 20;
                    
                    card.querySelector('.card-inner').style.transform = 
                        `rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
                });
                
                card.addEventListener('mouseleave', () => {
                    card.querySelector('.card-inner').style.transform = 'rotateY(0) rotateX(0)';
                });
            });
        });
    </script>
</body>
@endsection
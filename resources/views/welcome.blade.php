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
                        <button class="px-8 py-4 bg-rose-root text-white font-medium rounded-lg transition duration-300 shadow-lg">
                            Get started
                        </button>
                        <button class="px-8 py-4 bg-transparent border-2 border-gray-300 dark:border-gray-700 text-gray-800 dark:text-gray-200 font-medium rounded-lg transition duration-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                            How it works <span class="ml-2">💸</span>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-6 pt-4">
                        <div class="stat-card border-2 border-gray-300 dark:border-gray-700 p-5 rounded-xl shadow-md">
                            <p class="text-2xl md:text-3xl font-bold text-rose-root ">260+</p>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">Tutors</p>
                        </div>
                        <div class="stat-card border-2 border-gray-300 dark:border-gray-700 p-5 rounded-xl shadow-md">
                            <p class="text-2xl md:text-3xl font-bold text-rose-root ">5340+</p>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">Students</p>
                        </div>
                        <div class="stat-card border-2 border-gray-300 dark:border-gray-700 p-5 rounded-xl shadow-md">
                            <p class="text-2xl md:text-3xl font-bold text-rose-root ">280+</p>
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
    <div class="min-h-screen pt-8 px-4 mt-12 max-w-7xl mx-auto">
        <div class="my-4 mb-5">
            <h2 class="text-5xl text-center font-bold text-gray-900 dark:text-white">
                About Us
            </h2>
            <p class="text-center text-gray-900 dark:text-white mt-2">
                Our mission is to provide a platform for students and tutors to connect and learn from each other.
            </p>
        </div>
        <div class="grid grid-cols-2 justify-between">
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
                                    <div class="timeline-bullet bg-rose-root">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <g><path fill="none" d="M0 0h24v24H0z"></path><path d="M14 1.5V22h-2V3.704L7.5 4.91V2.839l5-1.339z"></path></g>
                                        </svg>
                                    </div>
                                    <div class="px-5 rounded-lg w-[90%]">
                                        <h3 class="text-xl font-bold text-white mb-3">প্রথম সপ্তাহ</h3>
                                        <p class="text-white mb-4">আমরা এই সপ্তাহে দুইটি মডিউল শেষ করবো এবং রিয়্যাক্ট এর বেসিক জিনিসগুলো সম্পর্কে জানবো</p>
                                        <p class="text-white text-sm rounded-lg">দুটি প্রোজেক্ট করে দেখানো হবে এবং দুটি এসাইনমেন্ট</p>
                                    </div>
                                </div>
                                
                                <!-- Item 2 -->
                                <div class="timeline-item relative pl-16 md:pl-0 flex justify-end">
                                    <div class="timeline-center-line"></div>
                                    <div class="timeline-bullet bg-rose-root">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <g><path fill="none" d="M0 0h24v24H0z"></path><path d="M16 7.5a4 4 0 1 0-8 0H6a6 6 0 1 1 10.663 3.776l-7.32 8.723L18 20v2H6v-1.127l9.064-10.802A3.982 3.982 0 0 0 16 7.5z"></path></g>
                                        </svg>
                                    </div>
                                    <div class="px-5 rounded-lg w-[90%]">
                                        <h3 class="text-xl font-bold text-white mb-3">দ্বিতীয় সপ্তাহ</h3>
                                        <p class="text-white mb-4">দ্বিতীয় সপ্তাহে আমরা স্টেট ম্যানেজমেন্ট এ ডিপ ড্রাইভ করবো</p>
                                        
                                        <p class="text-white text-sm rounded-lg">একটি প্রোজেক্ট করে দেখানো হবে এবং একটি এসাইনমেন্ট</p>
                                    </div>
                                </div>
                                
                                <!-- Item 3 -->
                                <div class="timeline-item relative pl-16 md:pl-0 flex justify-end">
                                    <div class="timeline-bullet bg-rose-root">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <g><path fill="none" d="M0 0h24v24H0z"></path><path d="M18 2v1.362L12.809 9.55a6.501 6.501 0 1 1-7.116 8.028l1.94-.486A4.502 4.502 0 0 0 16.5 16a4.5 4.5 0 0 0-6.505-4.03l-.228.122-.69-1.207L14.855 4 6.5 4V2H18z"></path></g>
                                        </svg>
                                    </div>
                                    <div class=" px-5 rounded-lg w-[90%]">
                                        <h3 class="text-xl font-bold text-white mb-3">তৃতীয় এবং চতূর্থ সপ্তাহ</h3>
                                        <p class="text-white mb-4">আমরা একটি মডিউল শেষ করবো এবং এডভান্স বিষয় গুলো জানবো</p>
                                        
                                        <p class="text-white text-sm rounded-lg">একটি প্রোজেক্ট করে দেখানো হবে এবং একটি এসাইনমেন্ট</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Service SEction --}}
    
    <div class="min-h-screen max-w-7xl mx-auto flex flex-col items-center justify-center pb-20 px-4 relative z-10">
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
            <button class="px-8 py-4 bg-rose-root text-white font-medium rounded-lg transition duration-300 shadow-lg">
                Explore More
            </button>
        </div>
    </div>
    

    {{-- Price Section --}}
    <div class="max-w-7xl mx-auto w-full py-20">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r text-white bg-clip-text mb-4">
                Simple, Transparent Pricing
            </h1>
            <p class="max-w-2xl mx-auto text-gray-400 text-lg">
                Choose the perfect plan for your needs. All plans include our core features with no hidden fees.
            </p>
            
            <!-- Toggle Switch -->
            <div class="mt-10 flex items-center justify-center">
                <span class="mr-4 font-medium text-gray-300">Monthly</span>
                <div class="relative inline-block w-16 h-8">
                    <input type="checkbox" class="hidden" id="billing-toggle">
                    <label for="billing-toggle" class="block w-full h-full rounded-full toggle-bg cursor-pointer">
                        <div class="absolute left-1 top-1 bg-rose-root w-6 h-6 rounded-full transition-transform duration-300 transform translate-x-0"></div>
                    </label>
                </div>
                <span class="ml-4 font-medium text-gray-300">
                    Annual <span class="text-rose-root">(Save 20%)</span>
                </span>
            </div>
        </div>
        
        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Basic Plan -->
            <div class="pricing-card bg-dark-800 rounded-xl p-8 relative">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-200 mb-2">Basic</h3>
                    <p class="text-gray-400">Ideal for individuals and small projects</p>
                </div>
                
                <div class="mb-8">
                    <div class="text-4xl font-bold text-white mb-1">$19<span class="text-gray-400 text-xl">/month</span></div>
                    <p class="text-gray-400 text-sm">Billed annually at $228</p>
                </div>
                
                <ul class="space-y-4 mb-10 text-white">
                    <li class="feature-item">Up to 5 projects</li>
                    <li class="feature-item">3 team members</li>
                    <li class="feature-item">Basic analytics</li>
                    <li class="feature-item">Email support</li>
                    <li class="feature-item opacity-50">Priority support</li>
                    <li class="feature-item opacity-50">Advanced integrations</li>
                </ul>
                
                <button class="w-full py-3 bg-dark-700 text-gray-200 rounded-lg font-medium hover:bg-dark-600 transition">
                    Get Started
                </button>
            </div>
            
            <!-- Pro Plan - Popular -->
            <div class="pricing-card bg-dark-800 rounded-xl p-8 relative border-2 border-indigo-500/30">
                <div class="popular-badge absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-12 flex items-end justify-center pb-2">
                    <span class="text-xs font-bold text-white">MOST POPULAR</span>
                </div>
                
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-200 mb-2">Professional</h3>
                    <p class="text-gray-400">Perfect for growing teams and businesses</p>
                </div>
                
                <div class="mb-8">
                    <div class="text-4xl font-bold text-white mb-1">$49<span class="text-gray-400 text-xl">/month</span></div>
                    <p class="text-gray-400 text-sm">Billed annually at $588</p>
                </div>
                
                <ul class="space-y-4 mb-10 text-white">
                    <li class="feature-item">Unlimited projects</li>
                    <li class="feature-item">10 team members</li>
                    <li class="feature-item">Advanced analytics</li>
                    <li class="feature-item">Priority support</li>
                    <li class="feature-item">API access</li>
                    <li class="feature-item">Custom integrations</li>
                </ul>
                
                <button class="w-full py-3 glow-button text-white rounded-lg font-medium">
                    Start Free Trial
                </button>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="pricing-card bg-dark-800 rounded-xl p-8 relative">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-200 mb-2">Enterprise</h3>
                    <p class="text-gray-400">For large organizations with custom needs</p>
                </div>
                
                <div class="mb-8">
                    <div class="text-4xl font-bold text-white mb-1">$99<span class="text-gray-400 text-xl">/month</span></div>
                    <p class="text-gray-400 text-sm">Billed annually at $1188</p>
                </div>
                
                <ul class="space-y-4 mb-10 text-white">
                    <li class="feature-item">Unlimited projects</li>
                    <li class="feature-item">Unlimited team members</li>
                    <li class="feature-item">Advanced analytics</li>
                    <li class="feature-item">24/7 dedicated support</li>
                    <li class="feature-item">Custom API limits</li>
                    <li class="feature-item">Enterprise-grade security</li>
                </ul>
                
                <button class="w-full py-3 bg-dark-700 text-gray-200 rounded-lg font-medium hover:bg-dark-600 transition">
                    Contact Sales
                </button>
            </div>
        </div>
    </div>

    {{-- FAQ Section --}}
    <div class="max-w-7xl mx-auto w-full py-20">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-white bg-clip-text mb-4">
                Frequently Asked Questions
            </h1>
            <p class="max-w-2xl mx-auto text-gray-400 text-lg">
                Our platform is built to help you work smarter, not harder. It adapts to your needs and supports your goals. Make the most of every feature.
            </p>
        </div>
        
        <!-- FAQ Content -->
        <div class="glow-border bg-dark-800 rounded-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-4">
                <!-- Topic Navigation -->
                <div class="bg-dark-900 p-6 lg:p-8 border-b lg:border-b-0 lg:border-r border-gray-800">
                    <h2 class="text-xl font-bold mb-6 text-rose-root">Topics</h2>
                    <ul class="space-y-2">
                        <li class="topic-item active p-3 rounded-md cursor-pointer" data-topic="general">
                            <div class="flex items-center">
                                <i class="fas fa-question-circle mr-3 text-rose-root"></i>
                                <span class="text-white">General Questions</span>
                            </div>
                        </li>
                        <li class="topic-item p-3 rounded-md cursor-pointer" data-topic="account">
                            <div class="flex items-center">
                                <i class="fas fa-user mr-3 text-rose-root"></i>
                                <span class="text-white">Account & Billing</span>
                            </div>
                        </li>
                        <li class="topic-item p-3 rounded-md cursor-pointer" data-topic="features">
                            <div class="flex items-center">
                                <i class="fas fa-cogs mr-3 text-rose-root"></i>
                                <span class="text-white">Features & Usage</span>
                            </div>
                        </li>
                        <li class="topic-item p-3 rounded-md cursor-pointer" data-topic="security">
                            <div class="flex items-center">
                                <i class="fas fa-shield-alt mr-3 text-rose-root"></i>
                                <span class="text-white">Security & Privacy</span>
                            </div>
                        </li>
                        <li class="topic-item p-3 rounded-md cursor-pointer" data-topic="support">
                            <div class="flex items-center">
                                <i class="fas fa-headset mr-3 text-rose-root"></i>
                                <span class="text-white">Support Team</span>
                            </div>
                        </li>
                        <li class="topic-item p-3 rounded-md cursor-pointer" data-topic="misc">
                            <div class="flex items-center">
                                <i class="fas fa-ellipsis-h mr-3 text-rose-root"></i>
                                <span class="text-white">Miscellaneous</span>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- FAQ Content -->
                <div class="col-span-1 lg:col-span-3 p-6 lg:p-8">
                    <!-- General Questions (Default) -->
                    <div class="topic-content active" id="topic-general">
                        <h2 class="text-2xl font-bold mb-6 text-gray-200 flex items-center">
                            <i class="fas fa-question-circle mr-3 text-rose-root"></i>
                            General Questions
                        </h2>
                        
                        <div class="space-y-4">
                            <div class="accordion-item active">
                                <div class="accordion-header p-4 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg text-white">What is the purpose of this platform?</h3>
                                    <i class="accordion-icon fas fa-chevron-down text-rose-root transition-transform"></i>
                                </div>
                                <div class="accordion-content px-4">
                                    <p class="text-gray-400">Our platform is designed to help you work smarter, not harder. It adapts to your specific needs and supports your business goals by providing intelligent automation and analytics tools.</p>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <div class="accordion-header p-4 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg text-white">How does the platform adapt to my needs?</h3>
                                    <i class="accordion-icon fas fa-chevron-down text-rose-root transition-transform"></i>
                                </div>
                                <div class="accordion-content px-4">
                                    <p class="text-gray-400">The platform uses machine learning to analyze your workflow patterns and provides personalized recommendations. You can customize dashboards, automate repetitive tasks, and integrate with your existing tools to create a tailored experience.</p>
                                    <p class="text-gray-400 mt-2">As you use the platform more, it becomes better at anticipating your needs and suggesting optimizations.</p>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <div class="accordion-header p-4 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg text-white">Is there a free trial available?</h3>
                                    <i class="accordion-icon fas fa-chevron-down text-rose-root transition-transform"></i>
                                </div>
                                <div class="accordion-content px-4">
                                    <p class="text-gray-400">Yes, we offer a 14-day free trial for all our premium plans. You can access all features during the trial period with no credit card required.</p>
                                    <p class="text-gray-400 mt-2">After the trial, you can choose from our flexible subscription plans that scale with your business needs.</p>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <div class="accordion-header p-4 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg  text-white">What kind of support do you offer?</h3>
                                    <i class="accordion-icon fas fa-chevron-down text-rose-root transition-transform"></i>
                                </div>
                                <div class="accordion-content px-4">
                                    <p class="text-gray-400">We provide multiple support channels:</p>
                                    <ul class="mt-2 ml-5 space-y-1 text-gray-400">
                                        <li class="flex items-start"><span class="mr-2">•</span> 24/7 live chat support</li>
                                        <li class="flex items-start"><span class="mr-2">•</span> Email support with 12-hour response time</li>
                                        <li class="flex items-start"><span class="mr-2">•</span> Comprehensive knowledge base</li>
                                        <li class="flex items-start"><span class="mr-2">•</span> Video tutorials and webinars</li>
                                        <li class="flex items-start"><span class="mr-2">•</span> Dedicated account manager for enterprise plans</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Account & Billing -->
                    <div class="topic-content hidden" id="topic-account">
                        <h2 class="text-2xl font-bold mb-6 text-gray-200 flex items-center">
                            <i class="fas fa-user mr-3 text-rose-root"></i>
                            Account & Billing
                        </h2>
                        
                        <div class="space-y-4">
                            <div class="accordion-item">
                                <div class="accordion-header p-4 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg text-white">How do I change my payment method?</h3>
                                    <i class="accordion-icon fas fa-chevron-down text-rose-root transition-transform"></i>
                                </div>
                                <div class="accordion-content px-4">
                                    <p class="text-gray-400">You can update your payment method at any time from the Billing section in your account settings.</p>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <div class="accordion-header p-4 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg text-white">Can I switch plans after subscribing?</h3>
                                    <i class="accordion-icon fas fa-chevron-down text-rose-root transition-transform"></i>
                                </div>
                                <div class="accordion-content px-4">
                                    <p class="text-gray-400">Yes, you can upgrade or downgrade your plan at any time. Any prorated difference will be applied to your next billing cycle.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Features & Usage -->
                    <div class="topic-content hidden" id="topic-features">
                        <h2 class="text-2xl font-bold mb-6 text-gray-200 flex items-center">
                            <i class="fas fa-cogs mr-3 text-rose-root"></i>
                            Features & Usage
                        </h2>
                        
                        <div class="space-y-4">
                            <div class="accordion-item">
                                <div class="accordion-header p-4 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg text-white">How do I create automation workflows?</h3>
                                    <i class="accordion-icon fas fa-chevron-down text-rose-root transition-transform"></i>
                                </div>
                                <div class="accordion-content px-4">
                                    <p class="text-gray-400">Create text automations and flows based on custom prebuilt audiences. Capture abandon carts and automate follow-up sequences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Support Team -->
                    <div class="topic-content hidden" id="topic-support">
                        <h2 class="text-2xl font-bold mb-6 text-gray-200 flex items-center">
                            <i class="fas fa-headset mr-3 text-rose-root"></i>
                            Support Team
                        </h2>
                        
                        <div class="space-y-4">
                            <div class="accordion-item">
                                <div class="accordion-header p-4 flex justify-between items-center">
                                    <h3 class="font-semibold text-lg text-white">How can I contact the support team?</h3>
                                    <i class="accordion-icon fas fa-chevron-down text-rose-root transition-transform"></i>
                                </div>
                                <div class="accordion-content px-4">
                                    <p class="text-gray-400">Our support team is available 24/7 through live chat in the application. You can also email us at support@yourplatform.com or submit a ticket through the help center.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Contact Section --}}
 
    <div class="bg-black max-w-7xl mx-auto text-gray-200 spcae-y-5 py-20">
        <!-- Contact Section -->
        <section class="py-16 px-4 sm:px-6 lg:px-8 spcae-y-5">
            <div class="max-w-7xl mx-auto">
                <div class="overlap-section">
                    <div class="contact-section rounded-2xl overflow-hidden">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-0">
                            <!-- Left Column: Contact Info -->
                            <div class="bg-dark-800 p-8 md:p-12">
                                <h2 class="text-3xl md:text-4xl font-bold text-rose-root mb-6">
                                    GET IN TOUCH
                                </h2>
                                <p class="text-gray-400 mb-8 max-w-md">
                                    Utbildes nisi velutpateten, illo inne nostar veri alta eksi egalai architeccio vitae dicta suos epistallo neemo enne laugust alti, undo ennno itse natura error.
                                </p>
                                
                                <div class="space-y-6">
                                    <div class="contact-info-item flex items-start">
                                        <div class="bg-dark-700 p-3 rounded-lg mr-4">
                                            <i class="fas fa-envelope text-rose-root text-xl"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-300">Email</h3>
                                            <p class="text-gray-400">redanab@deviserwebs.com</p>
                                        </div>
                                    </div>
                                    
                                    <div class="contact-info-item flex items-start">
                                        <div class="bg-dark-700 p-3 rounded-lg mr-4">
                                            <i class="fas fa-phone text-rose-root text-xl"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-300">Phone</h3>
                                            <p class="text-gray-400">01781746373</p>
                                        </div>
                                    </div>
                                    
                                    <div class="contact-info-item flex items-start">
                                        <div class="bg-dark-700 p-3 rounded-lg mr-4">
                                            <i class="fas fa-map-marker-alt text-rose-root text-xl"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-300">Address</h3>
                                            <p class="text-gray-400">GeisterInner 8886, Sybitt, Baugsäden</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Right Column: Contact Form -->
                            <div class="bg-dark-900 p-8 md:p-12">
                                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-200">
                                    SAY SOMETHING
                                </h2>
                                
                                <form class="contact-form space-y-6">
                                    <div>
                                        <label for="name" class="block text-gray-400 mb-2">Your Name</label>
                                        <input 
                                            type="text" 
                                            id="name" 
                                            class="w-full px-4 py-3 rounded-lg focus:outline-none text-white placeholder-gray-500" 
                                            placeholder="Enter your name">
                                    </div>
                                    
                                    <div>
                                        <label for="email" class="block text-gray-400 mb-2">Your Mail</label>
                                        <input 
                                            type="email" 
                                            id="email" 
                                            class="w-full px-4 py-3 rounded-lg focus:outline-none text-white placeholder-gray-500" 
                                            placeholder="Enter your email">
                                    </div>
                                    
                                    <div>
                                        <label for="message" class="block text-gray-400 mb-2">Message</label>
                                        <textarea 
                                            id="message" 
                                            rows="5" 
                                            class="w-full px-4 py-3 rounded-lg focus:outline-none text-white placeholder-gray-500" 
                                            placeholder="Write your message here"></textarea>
                                    </div>
                                    
                                    <button type="submit" class="glow-button w-full py-3 rounded-lg text-white font-semibold">
                                        SEND MESSAGE
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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


        // Price Section
         // Toggle functionality
        const toggle = document.getElementById('billing-toggle');
        const toggleLabel = document.querySelector('label[for="billing-toggle"]');
        const toggleIndicator = document.querySelector('label[for="billing-toggle"] div');
        
        toggle.addEventListener('change', function() {
            if (this.checked) {
                toggleIndicator.classList.add('translate-x-8');
            } else {
                toggleIndicator.classList.remove('translate-x-8');
            }
        });
        
        // Add hover effect to cards
        const cards = document.querySelectorAll('.pricing-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('shadow-glow');
            });
            
            card.addEventListener('mouseleave', () => {
                card.classList.remove('shadow-glow');
            });
        });

        // Topic Navigation
        const topicItems = document.querySelectorAll('.topic-item');
        const topicContents = document.querySelectorAll('.topic-content');
        
        topicItems.forEach(item => {
            item.addEventListener('click', () => {
                // Remove active class from all topics
                topicItems.forEach(i => i.classList.remove('active'));
                // Add active class to clicked topic
                item.classList.add('active');
                
                // Hide all topic contents
                topicContents.forEach(content => content.classList.add('hidden'));
                
                // Show selected topic content
                const topicId = item.getAttribute('data-topic');
                document.getElementById(`topic-${topicId}`).classList.remove('hidden');
            });
        });
        
        // Accordion Functionality
        const accordionItems = document.querySelectorAll('.accordion-item');
        
        accordionItems.forEach(item => {
            const header = item.querySelector('.accordion-header');
            
            header.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Close all accordion items
                accordionItems.forEach(i => i.classList.remove('active'));
                
                // If not active, open this one
                if (!isActive) {
                    item.classList.add('active');
                    item.classList.remove('border');
                }
            });
        });
    </script>
@endsection
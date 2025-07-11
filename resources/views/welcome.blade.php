@extends('layouts.main')

@section('title', 'Home Page')

@section('content')

    <div class="w-full bg-cover bg-center bg-no-repeat relative" style="background-image: url('/images/hero-bg.png');">
        <!-- Hero Section -->
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
@endsection
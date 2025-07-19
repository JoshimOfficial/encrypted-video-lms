@extends('layouts.main')

@section('title', 'About Page')

@section('content')

<div>
    <nav class="bg-black px-4 text-center text-white py-12">
        <h1 class="text-5xl mb-4 font-bold">About</h1>
        <ol class="flex items-center space-x-1 text-sm justify-center">
            <li>
                <a href="/" class="text-gray-300 hover:text-white transition-colors duration-200">Home</a>
            </li>
            <li class="text-gray-500">/</li>
            <li class="text-white font-medium" aria-current="page">About</li>
        </ol>
    </nav>
    <div class="footer-divider my-8"></div>
    <div class="flex items-center justify-center p-4">
        <div class="max-w-6xl w-full mx-auto">
            <!-- Hero Section -->
            <section class="py-16 md:py-24">
                <div class="container mx-auto px-4">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 mb-12 md:mb-0">
                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-white">
                                Transforming <span class="text-rose-root">Education</span> Through Technology
                            </h1>
                            <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                                Our Learning Management System is designed to revolutionize how educators teach and students learn. We combine cutting-edge technology with pedagogical expertise to create an engaging, accessible, and effective learning environment for everyone.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                
                                <button class="px-8 py-3 bg-rose-root rounded-lg font-semibold  transition">
                                    Meet Our Team
                                </button>
                            </div>
                        </div>
                        <div class="md:w-1/2 flex justify-center">
                            <div class="relative w-full">
                                <div class="absolute -top-6 -left-6 w-64 h-64 bg-primary rounded-full opacity-20 blur-3xl"></div>
                                <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-secondary rounded-full opacity-20 blur-3xl"></div>
                                <div class="relative bg-dark border border-gray-800 rounded-2xl p-1">
                                    <div class="bg-gray-900 rounded-xl overflow-hidden">
                                        <div class="h-8 bg-gray-800 flex items-center px-4">
                                            <div class="flex space-x-2">
                                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                            </div>
                                        </div>
                                        <div class="p-6 grid grid-cols-3 gap-4">
                                            <div class="bg-gray-800 rounded-lg p-4">
                                                <div class="h-4 bg-gray-700 rounded mb-3"></div>
                                                <div class="h-3 bg-gray-700 rounded w-3/4"></div>
                                            </div>
                                            <div class="bg-gray-800 rounded-lg p-4">
                                                <div class="h-4 bg-gray-700 rounded mb-3"></div>
                                                <div class="h-3 bg-gray-700 rounded w-3/4"></div>
                                            </div>
                                            <div class="bg-gray-800 rounded-lg p-4">
                                                <div class="h-4 bg-gray-700 rounded mb-3"></div>
                                                <div class="h-3 bg-gray-700 rounded w-3/4"></div>
                                            </div>
                                            <div class="col-span-2 bg-gradient-to-r from-primary/20 to-secondary/20 rounded-lg p-4 border border-primary/30">
                                                <div class="h-4 bg-primary/20 rounded mb-3 w-1/2"></div>
                                                <div class="h-3 bg-primary/20 rounded w-3/4"></div>
                                            </div>
                                            <div class="bg-gray-800 rounded-lg p-4">
                                                <div class="h-4 bg-gray-700 rounded mb-3"></div>
                                                <div class="h-3 bg-gray-700 rounded w-3/4"></div>
                                            </div>
                                            <div class="bg-gray-800 rounded-lg p-4">
                                                <div class="h-4 bg-gray-700 rounded mb-3"></div>
                                                <div class="h-3 bg-gray-700 rounded w-3/4"></div>
                                            </div>
                                            <div class="bg-gray-800 rounded-lg p-4">
                                                <div class="h-4 bg-gray-700 rounded mb-3"></div>
                                                <div class="h-3 bg-gray-700 rounded w-3/4"></div>
                                            </div>
                                            <div class="col-span-2 bg-gray-800 rounded-lg p-4">
                                                <div class="h-4 bg-gray-700 rounded mb-3 w-2/3"></div>
                                                <div class="h-3 bg-gray-700 rounded w-full mb-2"></div>
                                                <div class="h-3 bg-gray-700 rounded w-5/6"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section class="py-16">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl md:text-5xl text-center font-bold bg-gradient-to-r text-white bg-clip-text mb-4">Why Educators <span class="text-rose-root">Choose Us</span></h2>
                        <p class="max-w-2xl mx-auto text-gray-400">Our platform is designed to empower both teachers and students with innovative tools</p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Feature 1 -->
                        <div class="feature-card rounded-2xl p-8">
                            <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                                <i class="fas fa-graduation-cap text-2xl text-rose-root"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-white">Personalized Learning Paths</h3>
                            <p class="text-gray-400 mb-4">
                                AI-powered recommendations create customized learning experiences for each student based on their strengths and weaknesses.
                            </p>
                            <a href="#" class="text-rose-root font-medium flex items-center">
                                Learn more
                                <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>
                        
                        <!-- Feature 2 -->
                        <div class="feature-card rounded-2xl p-8">
                            <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                                <i class="fas fa-chart-line text-2xl text-rose-root"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-white">Real-time Analytics</h3>
                            <p class="text-gray-400 mb-4">
                                Gain insights into student performance with comprehensive dashboards and detailed progress tracking.
                            </p>
                            <a href="#" class="text-rose-root font-medium flex items-center">
                                Learn more
                                <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>
                        
                        <!-- Feature 3 -->
                        <div class="feature-card rounded-2xl p-8">
                            <div class="w-16 h-16 rounded-full bg-purple-500/10 flex items-center justify-center mb-6">
                                <i class="fas fa-users text-2xl text-rose-root"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-white">Collaborative Tools</h3>
                            <p class="text-gray-400 mb-4">
                                Foster teamwork with integrated discussion boards, group projects, and peer review capabilities.
                            </p>
                            <a href="#" class="text-rose-root font-medium flex items-center">
                                Learn more
                                <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16">
                        <div class="stat-card rounded-xl p-6 text-center">
                            <div class="text-3xl md:text-4xl font-bold gradient-text mb-2">150K+</div>
                            <div class="text-gray-400">Active Users</div>
                        </div>
                        <div class="stat-card rounded-xl p-6 text-center">
                            <div class="text-3xl md:text-4xl font-bold gradient-text mb-2">5K+</div>
                            <div class="text-gray-400">Courses</div>
                        </div>
                        <div class="stat-card rounded-xl p-6 text-center">
                            <div class="text-3xl md:text-4xl font-bold gradient-text mb-2">98%</div>
                            <div class="text-gray-400">Satisfaction Rate</div>
                        </div>
                        <div class="stat-card rounded-xl p-6 text-center">
                            <div class="text-3xl md:text-4xl font-bold gradient-text mb-2">24/7</div>
                            <div class="text-gray-400">Support</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    {{-- Service SEction --}}
    @include('components.serviceSection') 

    {{-- FAQ Section --}}
    @include('components.faqSection')


    {{-- Contact Section --}}
    
    @include('components.contactSection')
</div>

@endsection
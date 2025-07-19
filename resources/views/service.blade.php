@extends('layouts.main')

@section('title', 'About Page')

@section('content')

    <nav class="bg-black px-4 text-center text-white py-12">
        <h1 class="text-5xl mb-4 font-bold">Service</h1>
        <ol class="flex items-center space-x-1 text-sm justify-center">
            <li>
                <a href="/" class="text-gray-300 hover:text-white transition-colors duration-200">Home</a>
            </li>
            <li class="text-gray-500">/</li>
            <li class="text-white font-medium" aria-current="page">Service</li>
        </ol>
    </nav>
    <div class="footer-divider my-8"></div>

    <div class="min-h-screen text-white">
    <!-- Services Hero Section -->
    {{-- <section class="relative py-20 md:py-32 overflow-hidden">
        <!-- Background elements -->
        <div class="absolute -top-1/4 -right-1/4 w-96 h-96 bg-primary rounded-full opacity-10 blur-3xl"></div>
        <div class="absolute top-1/3 left-1/4 w-64 h-64 bg-secondary rounded-full opacity-10 blur-3xl"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-block mb-6">
                    <span class="feature-badge px-6 py-2 bg-primary/10 text-primary font-medium rounded-full">
                        Comprehensive Learning Solutions
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Empower Your <span class="gradient-text">Learning Journey</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto mb-10">
                    Discover our suite of professional educational services designed to enhance teaching effectiveness and learning outcomes.
                </p>
                <div class="flex justify-center gap-4">
                    <button class="px-8 py-3 bg-gradient-to-r from-primary to-secondary rounded-lg font-semibold hover:opacity-90 transition transform hover:-translate-y-1">
                        Get Started
                    </button>
                    <button class="px-8 py-3 bg-dark border border-gray-700 rounded-lg font-semibold hover:bg-gray-800 transition">
                        View Demo
                    </button>
                </div>
            </div>
        </div>
    </section> --}}
    
    <!-- Core Services Section -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl text-center font-bold bg-gradient-to-r text-white bg-clip-text mb-4">Our <span class="gradient-text">Core Services</span></h2>
                <p class="max-w-2xl mx-auto text-gray-400">Comprehensive solutions designed to meet all your educational needs</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card2 rounded-2xl p-8">
                    <div class="icon-wrapper w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fas fa-graduation-cap text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Course Management</h3>
                    <p class="text-gray-400 mb-5">
                        Create, organize, and deliver courses with our intuitive course builder. Manage content, assignments, and assessments in one place.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Drag-and-drop course builder</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Automated grading system</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Multimedia content support</span>
                        </li>
                    </ul>
                    <a href="#" class="text-primary font-medium flex items-center">
                        Explore features
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card2 rounded-2xl p-8">
                    <div class="icon-wrapper w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-3xl text-secondary"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Analytics Dashboard</h3>
                    <p class="text-gray-400 mb-5">
                        Gain actionable insights with our advanced analytics. Track student progress, engagement, and performance in real-time.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Real-time progress tracking</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Predictive analytics</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Customizable reports</span>
                        </li>
                    </ul>
                    <a href="#" class="text-secondary font-medium flex items-center">
                        Explore features
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card2 rounded-2xl p-8">
                    <div class="icon-wrapper w-16 h-16 rounded-2xl bg-purple-500/10 flex items-center justify-center mb-6">
                        <i class="fas fa-users text-3xl text-purple-500"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Collaboration Hub</h3>
                    <p class="text-gray-400 mb-5">
                        Foster engagement with built-in communication tools. Enable discussions, group projects, and peer-to-peer learning.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Integrated discussion forums</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Virtual classrooms</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Group project management</span>
                        </li>
                    </ul>
                    <a href="#" class="text-purple-500 font-medium flex items-center">
                        Explore features
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card2 rounded-2xl p-8">
                    <div class="icon-wrapper w-16 h-16 rounded-2xl bg-blue-500/10 flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-3xl text-blue-500"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Mobile Learning</h3>
                    <p class="text-gray-400 mb-5">
                        Access courses anytime, anywhere with our fully responsive mobile platform. Learning never stops with our iOS and Android apps.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Native iOS & Android apps</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Offline content access</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Push notifications</span>
                        </li>
                    </ul>
                    <a href="#" class="text-blue-500 font-medium flex items-center">
                        Explore features
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <!-- Service 5 -->
                <div class="service-card2 rounded-2xl p-8">
                    <div class="icon-wrapper w-16 h-16 rounded-2xl bg-yellow-500/10 flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-3xl text-yellow-500"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Enterprise Security</h3>
                    <p class="text-gray-400 mb-5">
                        Enterprise-grade security to protect your data and ensure compliance with global standards and regulations.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>GDPR & FERPA compliant</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>End-to-end encryption</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Regular security audits</span>
                        </li>
                    </ul>
                    <a href="#" class="text-yellow-500 font-medium flex items-center">
                        Explore features
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <!-- Service 6 -->
                <div class="service-card2 rounded-2xl p-8">
                    <div class="icon-wrapper w-16 h-16 rounded-2xl bg-green-500/10 flex items-center justify-center mb-6">
                        <i class="fas fa-headset text-3xl text-green-500"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Dedicated Support</h3>
                    <p class="text-gray-400 mb-5">
                        Our expert team provides 24/7 support and training to ensure your success with our platform.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>24/7 technical support</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Onboarding & training</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Dedicated account manager</span>
                        </li>
                    </ul>
                    <a href="#" class="text-green-500 font-medium flex items-center">
                        Explore features
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    @include('components.aboutSection')
    
    <!-- Integration Section -->
    <section class="py-16 md:py-24 bg-gradient-to-br from-dark to-black">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0">
                    <div class="max-w-lg">
                        <h2 class="text-4xl md:text-5xl text-center font-bold bg-gradient-to-r text-white bg-clip-text mb-4">
                            Seamless <span class="gradient-text">Integration</span> Ecosystem
                        </h2>
                        <p class="text-gray-300 mb-8">
                            Our platform integrates with your existing tools and systems to create a unified learning environment. Connect with popular applications and extend functionality through our API.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center p-4 bg-card rounded-xl">
                                <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mr-4">
                                    <i class="fab fa-google text-xl text-primary"></i>
                                </div>
                                <span class="font-medium">Google Workspace</span>
                            </div>
                            <div class="flex items-center p-4 bg-card rounded-xl">
                                <div class="w-12 h-12 rounded-lg bg-blue-500/10 flex items-center justify-center mr-4">
                                    <i class="fab fa-microsoft text-xl text-blue-500"></i>
                                </div>
                                <span class="font-medium">Microsoft 365</span>
                            </div>
                            <div class="flex items-center p-4 bg-card rounded-xl">
                                <div class="w-12 h-12 rounded-lg bg-purple-500/10 flex items-center justify-center mr-4">
                                    <i class="fab fa-slack text-xl text-purple-500"></i>
                                </div>
                                <span class="font-medium">Slack</span>
                            </div>
                            <div class="flex items-center p-4 bg-card rounded-xl">
                                <div class="w-12 h-12 rounded-lg bg-red-500/10 flex items-center justify-center mr-4">
                                    <i class="fas fa-plug text-xl text-red-500"></i>
                                </div>
                                <span class="font-medium">API Access</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 flex justify-center">
                    <div class="relative max-w-lg">
                        <div class="absolute -top-6 -left-6 w-64 h-64 bg-primary rounded-full opacity-10 blur-3xl"></div>
                        <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-secondary rounded-full opacity-10 blur-3xl"></div>
                        <div class="relative bg-card border border-gray-800 rounded-2xl p-8">
                            <div class="text-center mb-8">
                                <h3 class="text-xl font-bold mb-2">Integration Dashboard</h3>
                                <p class="text-gray-400">Manage all your connected services in one place</p>
                            </div>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center p-4 bg-gray-900 rounded-lg">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 rounded-lg bg-blue-500/10 flex items-center justify-center mr-3">
                                            <i class="fab fa-microsoft text-blue-500"></i>
                                        </div>
                                        <div>
                                            <div class="font-medium">Microsoft Teams</div>
                                            <div class="text-sm text-gray-500">Connected</div>
                                        </div>
                                    </div>
                                    <div class="text-green-500 text-sm font-medium">Active</div>
                                </div>
                                <div class="flex justify-between items-center p-4 bg-gray-900 rounded-lg">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 rounded-lg bg-purple-500/10 flex items-center justify-center mr-3">
                                            <i class="fab fa-slack text-purple-500"></i>
                                        </div>
                                        <div>
                                            <div class="font-medium">Slack</div>
                                            <div class="text-sm text-gray-500">Connected</div>
                                        </div>
                                    </div>
                                    <div class="text-green-500 text-sm font-medium">Active</div>
                                </div>
                                <div class="flex justify-between items-center p-4 bg-gray-900 rounded-lg">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center mr-3">
                                            <i class="fab fa-zoom text-red-500"></i>
                                        </div>
                                        <div>
                                            <div class="font-medium">Zoom</div>
                                            <div class="text-sm text-gray-500">Not connected</div>
                                        </div>
                                    </div>
                                    <button class="px-4 py-2 bg-dark border border-gray-700 rounded-lg text-sm font-medium hover:bg-gray-800">Connect</button>
                                </div>
                                <div class="flex justify-between items-center p-4 bg-gray-900 rounded-lg">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 rounded-lg bg-green-500/10 flex items-center justify-center mr-3">
                                            <i class="fab fa-shopify text-green-500"></i>
                                        </div>
                                        <div>
                                            <div class="font-medium">Shopify</div>
                                            <div class="text-sm text-gray-500">Not connected</div>
                                        </div>
                                    </div>
                                    <button class="px-4 py-2 bg-dark border border-gray-700 rounded-lg text-sm font-medium hover:bg-gray-800">Connect</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    {{-- Price Section --}}
    @include('components.priceSection')

    <!-- CTA Section -->
    <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute -top-1/2 left-1/4 w-full h-full bg-gradient-to-r from-primary/5 to-transparent rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl text-center font-bold bg-gradient-to-r text-white bg-clip-text mb-4">Ready to Transform Your Learning Experience?</h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto mb-10">
                    Join thousands of educators and institutions using our platform to deliver exceptional learning experiences.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button class="px-8 py-4 bg-gradient-to-r from-primary to-secondary rounded-lg font-semibold text-lg hover:opacity-90 transition transform hover:-translate-y-1">
                        Start Free Trial
                    </button>
                    <button class="px-8 py-4 bg-dark border border-gray-700 rounded-lg font-semibold text-lg hover:bg-gray-800 transition">
                        Schedule a Demo
                    </button>
                </div>
                <div class="mt-8 text-gray-400 flex flex-wrap justify-center gap-6">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>No credit card required</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>14-day free trial</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span>Cancel anytime</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    @include('components.faqSection')


    {{-- Contact Section --}}
    @include('components.contactSection')

</div>
@endsection
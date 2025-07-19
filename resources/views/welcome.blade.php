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
    @include('components.aboutSection')


    {{-- Service SEction --}}
    @include('components.serviceSection')    

    

    {{-- Price Section --}}
    @include('components.priceSection')

    {{-- FAQ Section --}}
    @include('components.faqSection')


    {{-- Contact Section --}}
    
    @include('components.contactSection')

    <script>



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
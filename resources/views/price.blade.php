@extends('layouts.main')

@section('title', 'Home Page')

@section('content')

    <nav class="bg-black px-4 text-center text-white py-12">
        <h1 class="text-5xl mb-4 font-bold">Price</h1>
        <ol class="flex items-center space-x-1 text-sm justify-center">
            <li>
                <a href="/" class="text-gray-300 hover:text-white transition-colors duration-200">Home</a>
            </li>
            <li class="text-gray-500">/</li>
            <li class="text-white font-medium" aria-current="page">Price</li>
        </ol>
    </nav>
    <div class="footer-divider my-8"></div>
    {{-- Price Section --}}
    @include('components.priceSection')
    <section class="py-16 px-6 bg-[#0a0a0a] text-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl text-center font-bold bg-gradient-to-r text-white bg-clip-text mb-4">Detailed Feature Comparison</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">See exactly what each plan offers to make the best decision for your needs</p>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b border-dark-700">
                            <th class="pb-4 font-semibold text-white">Features</th>
                            <th class="pb-4 font-semibold text-center text-gray-400">Starter</th>
                            <th class="pb-4 font-semibold text-center text-rose-root">Professional</th>
                            <th class="pb-4 font-semibold text-center text-white">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-dark-700">
                            <td class="py-4 font-medium text-white">Students</td>
                            <td class="py-4 text-center">100</td>
                            <td class="py-4 text-center">500</td>
                            <td class="py-4 text-center">Unlimited</td>
                        </tr>
                        <tr class="border-b border-dark-700">
                            <td class="py-4 font-medium text-white">Courses</td>
                            <td class="py-4 text-center">5</td>
                            <td class="py-4 text-center">Unlimited</td>
                            <td class="py-4 text-center">Unlimited</td>
                        </tr>
                        <tr class="border-b border-dark-700">
                            <td class="py-4 font-medium text-white">Storage</td>
                            <td class="py-4 text-center">5GB</td>
                            <td class="py-4 text-center">50GB</td>
                            <td class="py-4 text-center">500GB</td>
                        </tr>
                        <tr class="border-b border-dark-700">
                            <td class="py-4 font-medium text-white">Custom Branding</td>
                            <td class="py-4 text-center text-gray-500"><i class="fas fa-times"></i></td>
                            <td class="py-4 text-center text-green-400"><i class="fas fa-check"></i></td>
                            <td class="py-4 text-center text-green-400"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr class="border-b border-dark-700">
                            <td class="py-4 font-medium text-white">Advanced Analytics</td>
                            <td class="py-4 text-center text-gray-500"><i class="fas fa-times"></i></td>
                            <td class="py-4 text-center text-green-400"><i class="fas fa-check"></i></td>
                            <td class="py-4 text-center text-green-400"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr class="border-b border-dark-700">
                            <td class="py-4 font-medium text-white">SCORM Compliance</td>
                            <td class="py-4 text-center text-gray-500"><i class="fas fa-times"></i></td>
                            <td class="py-4 text-center text-gray-500"><i class="fas fa-times"></i></td>
                            <td class="py-4 text-center text-green-400"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td class="py-4 font-medium text-white">Priority Support</td>
                            <td class="py-4 text-center text-gray-500"><i class="fas fa-times"></i></td>
                            <td class="py-4 text-center text-green-400"><i class="fas fa-check"></i></td>
                            <td class="py-4 text-center text-green-400"><i class="fas fa-check"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    @include('components.faqSection')
@endsection
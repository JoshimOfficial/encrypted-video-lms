@extends('layouts.main')

@section('title', 'About Page')

@section('content')

    <nav class="bg-black px-4 text-center text-white py-12">
        <h1 class="text-5xl mb-4 font-bold">Contact</h1>
        <ol class="flex items-center space-x-1 text-sm justify-center">
            <li>
                <a href="/" class="text-gray-300 hover:text-white transition-colors duration-200">Home</a>
            </li>
            <li class="text-gray-500">/</li>
            <li class="text-white font-medium" aria-current="page">Contact</li>
        </ol>
    </nav>
    <div class="footer-divider my-8"></div>

    {{-- Contact Section --}}
    
    @include('components.contactSection')

    {{-- FAQ Section --}}
    @include('components.faqSection')


@endsection
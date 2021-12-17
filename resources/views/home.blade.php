@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 text-white rounded-lg bg-gray-800 p-10 font-bold">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="relative bg-gray-800 overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8  sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Debate Website</span>
                        
                        <s><div class="block text-indigo-600 xl:inline">Actually this is a verbal agression website</div></s>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        In this particular website you will have to be agressive with the words to be heard, but don't take it personal, we do this for fun and as a therapy for young people with rage. here you can say whatever you want and you won't be judged by noone.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                        <a href="{{ route('dashboard') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                            Dashboard
                        </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="{{ route('posts') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                            Posts
                        </a>
                        </div>
                    </div>
                    </div>
                </main>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
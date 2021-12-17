@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 text-white rounded-lg bg-gray-800 p-10 font-bold">
            Dashboard
            <div>
                <p class="font-normal">This is your dashboard</p>
            </div>
        </div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-gray-50 rounded-lg">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Ready to start debating here?</span>
                <span class="block text-indigo-600">Agressive debates only.</span>
                </h2>
                <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="/posts" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Post Something
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
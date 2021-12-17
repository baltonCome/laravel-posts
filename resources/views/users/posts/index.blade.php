@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 text-white rounded-lg bg-gray-800 p-10">
            <div class="p-6 text-white rounded-lg bg-gray-800">
                <h1 class="text-2xl font-medium mb-1">Collected Data About This User </h1>
                <h2 class="text-l font-medium mb-1">Name: {{ $user->name }}
                </h2>
                <h3 class="text-l font-medium mb-1">Mail: {{ $user->email }} </h3>
                <h3 class="text-l font-medium mb-1">Username: {{ $user->username }} </h3>
                <p>Nr. of posts {{ $posts->count() }}</p>
                <p>Received {{ $user->receivedLikes->count() }} likes </p>
                <p>Liked {{ $user->likes->count() }} posts</p>
            </div>
            
            <div class="text-white rounded-lg bg-gray-600 p-10">
                @if ($posts -> count())
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach
                
                {{ $posts->links() }}
                @else
                    <p>{{ $user->name }} Have no posts</p>
                @endif
            </div>
            
        </div>
    </div>
@endsection
@extends('layouts.app') 

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 text-white rounded-lg bg-gray-800 p-10">
            @auth
                <form action="{{ route('posts') }}" method="post" class="mx-2 mb-4">
                    @csrf
                    <div class="mb-4">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 text-black rounded-lg @error('body') border-red-500 @enderror" placeholder="Tell me something good mate!"></textarea>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                        
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium float-right">Post</button>
                    </div>
                </form>
            @endauth
            @if($posts->count())
                @foreach($posts as $post)
                    <x-post :post="$post"/>
                @endforeach

                {{ $posts->links() }}
            @else
                <p>No posts to show</p>
            @endif

        </div>
    </div>
@endsection
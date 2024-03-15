@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>
<div class="whole-container">
    <div class="util-container">
        <div class="search-container">
            <form action="{{ route('blog.index') }}" method="GET">
                <div class="search-input-container">
                    <input class="search-input-field" type="text" name="search" placeholder="Search by Title/Description" value="{{ request()->input('search') }}">
                    <button type="search-submit-button">
                        <svg width="20px" height="20px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.545 15.467l-3.779-3.779a6.15 6.15 0 0 0 .898-3.21c0-3.417-2.961-6.377-6.378-6.377A6.185 6.185 0 0 0 2.1 8.287c0 3.416 2.961 6.377 6.377 6.377a6.15 6.15 0 0 0 3.115-.844l3.799 3.801a.953.953 0 0 0 1.346 0l.943-.943c.371-.371.236-.84-.135-1.211zM4.004 8.287a4.282 4.282 0 0 1 4.282-4.283c2.366 0 4.474 2.107 4.474 4.474a4.284 4.284 0 0 1-4.283 4.283c-2.366-.001-4.473-2.109-4.473-4.474z" />
                        </svg></button>
                </div>
            </form>
        </div>
        <div class="sort-container">
            <form action="{{ route('blog.index') }}" method="GET">
                <label for="sort_column">Sort By:</label>
                <select class="sort_column" name="sort_column" id="sort_column">
                    <option value="updated_at" {{ request()->input('sort_column') == 'updated_at' ? 'selected' : '' }}>Date Updated </option>
                    <option value="created_at" {{ request()->input('sort_column') == 'created_at' ? 'selected' : '' }}>Date Created </option>
                </select>
                <select class="sort_order" name="sort_order" id="sort_order">
                    <option value="desc" {{ request()->input('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
                    <option value="asc" {{ request()->input('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                </select>

                <button class="sort-submit-button" type="submit">Apply</button>
            </form>
        </div>
    </div>
</div>

@if (session()->has('message'))
<div class="w-4/5 m-auto mt-10 pl-2">
    <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
        {{ session()->get('message') }}
    </p>
</div>
@endif

@if (Auth::check())
<div class="pt-15 w-4/5 m-auto">
    <a href="/blog/create" class="bg-indigo-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
        Create post
    </a>
</div>
@endif

@foreach ($posts as $post)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
        </h2>

        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>

        <a href="/blog/{{ $post->slug }}" class="uppercase bg-indigo-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Keep Reading
        </a>

        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
        <span class="float-right">
            <a href="/blog/{{ $post->slug }}/edit" class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                Edit
            </a>
        </span>

        <span class="float-right">
            <form action="/blog/{{ $post->slug }}" method="POST">
                @csrf
                @method('delete')

                <button class="text-red-500 pr-3" type="submit">
                    Delete
                </button>

            </form>
        </span>
        @endif
    </div>
</div>
@endforeach

@endsection
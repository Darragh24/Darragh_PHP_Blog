@extends('layouts.app')

@section('content')
<div class="blog-container">
    <div class="title-container">
        <h1 class="title-h1">
            {{ $post->title }}
        </h1>
        <img class="title-image" src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>
</div>


<div class="description-container">
    <span class="date-container">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    < <p class="description-text">
        {{ $post->description }}
        </p>
</div>
<div class="content-container">
    <p class="content-text">
        {{ $post->content }}
    </p>
</div>

@endsection
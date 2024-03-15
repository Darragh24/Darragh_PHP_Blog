@extends('layouts.app')

@section('content')
<div class="main-container">
    <div class="blog-container">
        <div class="blog-intro-container">
            <div class="left-container">
                <div class="title-container">
                    <h1 class="title-h1">
                        {{ $post->title }}
                    </h1>
                </div>
                <div class="description-container">
                    <div class="date-container">
                        By <span class="date-span">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                    </div>
                    <p class="description-text">
                        {{ $post->description }}
                    </p>
                </div>
            </div>
            <div class="right-container"><img class="title-image" src="{{ asset('images/' . $post->image_path) }}" alt=""></div>
        </div>





        <div class="content-container">
            <p class="content-text">
                {{ $post->content }}
            </p>
        </div>
    </div>
</div>
@endsection
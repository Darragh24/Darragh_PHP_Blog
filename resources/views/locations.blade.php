@extends('layouts.app')

@section('content')



<div class="main-container">

 <div class="locations-container">
  @foreach ($locations as $location)
  <div class="locations-box-container">
   <div class="locations-image-container">
    <img class="locations-image" src="{{ $location->image_url }}" alt="{{ $location->title }}">
   </div>
   <div class=" locations-text-container">
    <h1 class="text-h1">{{ $location->title }}</h1>
    <h2 class="text-h2">Description:</h2>
    <h3 class="text-h3">{{ $location->content }}</h3>
   </div>
  </div>
  @endforeach


 </div>
</div>


@endsection
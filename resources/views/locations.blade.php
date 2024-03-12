@extends('layouts.app')

@section('content')



<div class="main-container">
 @foreach ($locations as $location)
 <h1>$location.title</h1>
 @endforeach
 <div class="locations-container">
  <div class="locations-box-container">
   <div class="locations-image-container">
    <img class="locations-image" src="https://sencaptour.com/wp-content/uploads/2023/06/Pamukkale-ve-Salda-Golu-Turu-1.webp">
   </div>
   <div class="locations-text-container">
    <h1 class="text-h1">Pamukkale, Turkey</h1>
    <h2 class="text-h2">Description:</h2>
    <h3 class="text-h3">Pamukkale is a town in western Turkey known for the mineral-rich thermal waters flowing down white travertine terraces on a nearby hillside. It neighbors Hierapolis, an ancient Roman spa city founded around 190 B.C. Ruins there include a well-preserved theater and a necropolis with sarcophagi that stretch for 2km. The Antique Pool is famous for its submerged Roman columns, the result of an earthquake.</h3>
   </div>
  </div>




 </div>
</div>


@endsection
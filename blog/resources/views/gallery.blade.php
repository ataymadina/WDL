@extends('template')
@section('title','Home Page')
@section('content')
  <h1>Galllery</h1>
   <div class="gallery">
         <h1>Gallery</h1>
         <figure>
            <figcaption> cactus</figcaption>
            <img src="{{asset('img/cactus.jpg')}}" height="200px" alt="sea">
         </figure>
         <figure>
            <figcaption>mobile</figcaption>
            <img src="{{asset('img/mobile.jpg')}}" height="200px" alt="image">
         </figure>
         <figure>
            <figcaption>arrangement</figcaption>
            <img src="{{asset('img/arrangement.jpg')}}"  height="200px" alt="image">
         </figure>
         <figure>
            <figcaption>beach</figcaption>
            <img src="{{asset('img/beach.jpg')}}" height="200px" alt="image">
         </figure>
         
      </div>


  

 @endsection
 @section('navbar') 
 	@include('partials.navbar')

 @endsection
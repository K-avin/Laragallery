@extends('layouts.app')
<link href="{{ asset('css/details.min.css') }}" rel="stylesheet" type="text/css" > 
@section('content')
<div class="container">   
    <section class="gallery">                   
    <div class="carousel">        
         <?php  $x = 1; ?>
        @foreach($images as $image)     
            <input type="radio" id="image{{$x}}" name="gallery-control">
            <?php  $x++; ?>
        @endforeach
             
        <div class="wrap">    
            <?php  $y = 1; ?>
            @foreach($images as $image)
            <figure>
                <label for="fullscreen">
                <img src="{{asset('/uploads/'.$image->image)}}" alt="image{{$y}}"/>
                </label>
            </figure>
            <?php  $y++; ?>
            @endforeach
        </div>    
        <div class="thumbnails">      
        <div class="slider"><div class="indicator"></div></div>      
        <?php  $z = 1; ?>

        @foreach($images as $image)
            <label for="image{{$z}}" class="thumb" style="background-image: url({{asset('/uploads/'.$image->image)}})"></label>      
       <?php  $z++; ?>
            @endforeach
    </div>
    </div>    
    <h5 class="ml-3 mt-3">{{$title}}</h5> 
    <p class="ml-3">{{ $description}}</p>
    </section>    
</div>
@endsection

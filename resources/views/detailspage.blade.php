@extends('layouts.app')
<link href="{{ asset('css/details.min.css') }}" rel="stylesheet" type="text/css" > 
@section('content')
<div class="container">   
    @foreach ($images as $image)
        <p>{{$image->image_path}}</p>  
        <a class="btn btn-danger btn-sm" href="{{url('delete-album/'.$image->id)}}">Delete</a>      
        {{-- <img src="{{asset('/uploads/'.$image->image_path)}}" alt="23"> --}}
        {{-- <img src="{{asset('uploads/'.$image->image_path)}}" alt="23"> --}}
    @endforeach
    <img src="{{asset('uploads/$image->image_path')}}" alt="23">
    <section class="gallery">                   
    <div class="carousel">        
        <input type="radio" id="image1" name="gallery-control" checked>
        <input type="radio" id="image2" name="gallery-control">
        <input type="radio" id="image3" name="gallery-control">
        <input type="radio" id="image4" name="gallery-control">
        
        
        <input type="checkbox" id="fullscreen" name="gallery-fullscreen-control"/>
        
        <div class="wrap">      
        <figure>
            <label for="fullscreen">
            <img src="https://unsplash.it/1000/700/?random" alt="image1"/>
            </label>
        </figure>
        
        <figure>
            <label for="fullscreen">
            <img src="https://unsplash.it/1200/980/?random" alt="image2"/>
            </label>
        </figure>

        <figure>
            <label for="fullscreen">
            <img src="https://unsplash.it/1600/880/?random" alt="image3" />
            </label>
        </figure>

        <figure>
            <label for="fullscreen">
            <img src="https://unsplash.it/2000/1400/?random" alt="image4"/>
            </label>
        </figure>
        </div>    
        <div class="thumbnails">      
        <div class="slider"><div class="indicator"></div></div>      
        <label for="image1" class="thumb" style="background-image: url('https://unsplash.it/700/480/?random')"></label>      
        <label for="image2" class="thumb" style="background-image: url('https://unsplash.it/700/400/?random')"></label>      
        <label for="image3" class="thumb" style="background-image: url('https://unsplash.it/700/410/?random')"></label>        
        <label for="image4" class="thumb" style="background-image: url('https://unsplash.it/700/450/?random')"></label>
        </div>
    </div>    
    <h5 class="ml-3 mt-3">Wedding album</h5> 
    <p class="ml-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type 
        specimen book. It has survived not only five centuries, but also the leap into 
        electronic typesetting, remaining essentially unchanged.
    </p>
    </section>    
</div>
@endsection

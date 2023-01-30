@extends('layouts.main-layout')

@section('title')
   <title>Details Comics</title> 
@endsection

@section('content')
    
    <div class="blue-bar">
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
    </div>

    <div class="container single-comic">
        <div class="sx">
            <h1>ACTION COMICS #1000: THE DELUXE EDITION</h1>
            <div class="green-bar">
                <div>
                    <span class="light-green">U.S. Price:</span> 
                    <span class="white">&dollar;19.99</span>
                </div>
                
                <div>
                   <span class="light-green">AVAILABLE</span>
                    <span class="white availability">Check Availability</span> 
                </div>
            </div>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique sed, officia nihil illo aperiam quae 
                inventore, alias nobis ab blanditiis non iste, consequatur dicta dolorum. Nihil minima voluptatibus optio 
                odio. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique sed, officia nihil illo aperiam 
                quae inventore, alias nobis ab blanditiis non iste, consequatur dicta dolorum. Nihil minima voluptatibus 
                optio odio. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique sed, officia nihil illo 
                aperiam quae inventore, alias nobis ab blanditiis non iste, consequatur dicta dolorum. Nihil minima 
                voluptatibus optio odio.
            </p>
        </div>
        <div>
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="logo">
        </div>
    </div>
@endsection
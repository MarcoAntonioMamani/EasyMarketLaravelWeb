<style type="text/css">
.text_encima{
    position:absolute:
    color:##2c699d;;
    font-size: 30px;
    text-shadow:-4px -4px 4px #aaa; 
    font-family: arial:
}
</style>
@extends('layouts.app')

@section('content')

<div class="container">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{asset('img/banner2.jpg')}}"  alt="Chania">
      <div class="carousel-caption">
        <h1 class="text_encima">EASYMARKET</h1>
        <p class="text-encima">La manera mas fasil y efectiva de poder hacer tus compras.</p>
      </div>
    </div>

    <div class="item">
      <img src="{{asset('img/banner3.jpg')}}"   alt="Chania">
       <div class="carousel-caption">
        <h1 class="text-encima">EASYMARKET</h1>
        <p class="text-encima">La manera mas fasil y efectiva de poder hacer tus compras.</p>
      </div>
    </div>

    <div class="item">
      <img src="{{asset('img/banner.jpg')}}"  alt="Flower">
       <div class="carousel-caption">
        <h1 class="text-encima">EASYMARKET</h1>
        <p class="text-encima"> La manera mas fasil y efectiva de poder hacer tus compras.</p>
      </div>
    </div>

  

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>    
</div>
@endsection
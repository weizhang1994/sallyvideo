@extends('layouts.app')

@section('content')

    <header class="v-header container">
        <div class="fullscreen-video-wrap">
          <video src="./img/code.mp4" autoplay="true" loop="true"></video>
        </video>
        </div>
        <div class="header-overlay"></div>
        <div class="header-content text-md-center">
          @section('navbar')
          @endsection
          
          <h3>YOU ARE CORDIALLY INVITED TO AN HOUR VACATION ON MY MASSAGE TABLE. </h3>
          <hr>
          <p>call us to schedule your massage<br> 306 250 3966</p>
          <a href="./about" class="btn">Who want Massage</a>
        </div>
      </header>

@endsection
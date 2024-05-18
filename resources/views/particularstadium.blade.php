<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <!-- Link the css file with asset -->
  <link rel="stylesheet" href="{{ asset('cssfiles/particularstadium.css') }}">
  <title>{{$stadium->stadiumname}}</title>
</head>

<body>
  <header class="header" id="home">
    <a href="#home" class="logo"><span>{{$stadium->stadiumname}}</span> </a>


    <nav class="navbar">
      <a href="#about"> Know US</a>
      <a href="#players"> Players </a>
      <a href="#history"> Historical Events </a>



    </nav>
  </header>
  <section class="cover-image">
    <img src="{{asset('stadium/'.$stadium->coverpicture)}}" alt="">
  </section>

  <section class="about" id="about">
    <h1>About {{$stadium->stadiumname}}</h1>
    <div class="about-infoholder">
      <div class="image-holder">
        <img src="{{asset('stadium/'.$stadium->profilepicture)}}" alt="">
      </div>
      <div class="info-holder">
        <p>
          {{$stadium->stadiumdescription}}
        </div>
    </div>
  </section>



</body>
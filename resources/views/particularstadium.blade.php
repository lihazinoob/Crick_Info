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

      <a href="#history"> Historical Events </a>
      <a href="#feature"> Features</a>



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

  <section class="about" id="#history">
    <h1>TOP MOMENTS</h1>
    <div class="about-infoholder">
      <div class="image-holder">
        <img src="{{asset('stadium/'.$stadium->topmomentpicture1)}}" alt="">
      </div>
      <div class="text-holder">
        <p>
          {{$stadium->topmomenttext1}}
        </div>
    </div>
  </section>
  <section class="about" id="">
    <h1>TOP MOMENTS</h1>
    <div class="about-infoholder">
      <div class="image-holder">
        <img src="{{asset('stadium/'.$stadium->topmomentpicture2)}}" alt="">
      </div>
      <div class="text-holder">
        <p>
          {{$stadium->topmomenttext2}}
        </div>
    </div>
  </section>
  <section class="about" id="">
    <h1>TOP MOMENTS</h1>
    <div class="about-infoholder">
      <div class="image-holder">
        <img src="{{asset('stadium/'.$stadium->topmomentpicture3)}}" alt="">
      </div>
      <div class="text-holder">
        <p>
          {{$stadium->topmomenttext3}}
        </div>
    </div>
  </section>
  <section class="about" id="">
    <h1>TOP MOMENTS</h1>
    <div class="about-infoholder">
      <div class="image-holder">
        <img src="{{asset('stadium/'.$stadium->topmomentpicture4)}}" alt="">
      </div>
      <div class="text-holder">
        <p>
          {{$stadium->topmomenttext4}}
        </div>
    </div>
  </section>

  <section class="feature" id="feature">
    <h1>Features</h1>
    <div class="feature-card">
      <div class="featureimage">
        <img src="{{asset('stadium/'.$stadium->featurepicture)}}" alt="">
      </div>
      <div class="featuretext">
        
        <p>{{$stadium->featuredescription}}</p>
      </div>
    </div>
  </section>



</body>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <!-- <link rel="stylesheet" href="port.css" /> -->
    <!-- Link the css file using asset -->
    <link rel="stylesheet" href="{{ asset('cssfiles/particularplayer.css') }}" />
    <title>Player Info</title>
  </head>
  <body>
    <header class="header">
      <a href="#home" class="logo"><span>{{$player->full_name}}</span> </a>
      <i class="fa-solid fa-bars" id="menu-icon"></i>

      <nav class="navbar">
        <a href="#home" class="active"> Home </a>
        <a href="#about"> STATS </a>       
      </nav>
    </header>
    <!-- Home Section -->
    <section class="home" id="home">
      <div class="home-content">
        <h1><span>{{$player->full_name}}</span></h1>

        

        <p>
          {{$player->country}}
        </p>

        <div class="social-icons">
          <a href="#">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>

      <div class="home-img">
        <!-- <img src="image.jpg" alt="" /> -->
        <!-- Connect the image with asset -->
        <img src="{{ asset('playersinfo/'.$player->image) }}" alt="NFT" />
      </div>
    </section>
    <!-- About or Stats Section -->
    <h2 class="heading">Stats</h2>
    <section class="about" id="about">
      
      <div class="profile-card">
        <div class="image">
          <!-- Link the image with asset -->
          <img src="{{ asset('image/testball.jpg') }}" alt="" class="profile-img" />
        </div>
        <div class="text-data">
          <span class="name"> TEST MATCHES </span>
          <span class="destination"> MATCHES:  </span>
          <span class="destination"> RUN:  </span>
          <span class="destination"> WICKETS:  </span>

          
        </div>
      </div>
      <div class="profile-card">
        <div class="image">
          <!-- Link the image with asset -->
          <img src="{{ asset('image/testball.jpg') }}" alt="" class="profile-img" />
        </div>
        <div class="text-data">
          <span class="name"> ODI MATCHES </span>
          <span class="destination"> MATCHES:  </span>
          <span class="destination"> RUN:  </span>
          <span class="destination"> WICKETS:  </span>

          
        </div>
      </div>
      <div class="profile-card">
        <div class="image">
          <!-- Link the image with asset -->
          <img src="{{ asset('image/testball.jpg') }}" alt="" class="profile-img" />
        </div>
        <div class="text-data">
          <span class="name"> T20 MATCHES </span>
          <span class="destination"> MATCHES:  </span>
          <span class="destination"> RUN:  </span>
          <span class="destination"> WICKETS:  </span>

          
        </div>
      </div>
    </section>

    <!-- TimeLine Section -->

    
  </body>
</html>

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
        <a href="#about"> About </a>
        <a href="#services"> Services </a>
        <a href="#portfolio"> Portfolio </a>
        <a href="#contact"> Contact </a>
      </nav>
    </header>
    <!-- Home Section -->
    <section class="home" id="home">
      <div class="home-content">
        <h1><span>{{$player->full_name}}</span></h1>

        <h3 class="text-animation">I'm a <span></span></h3>

        <p>
          This is the portfolio for many use cases. Use it like you want to.
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
          <a href="#">
            <i class="fab fa-linkedin"></i>
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
    <section class="about" id="about">
      <div class="profile-card">
        <div class="image">
        <!-- <img src="image.jpg" alt="" /> -->
        </div>
        <div class="text-data">
          <span class="name"> Naveed Lihazi </span>
          <span class="destination"> GOTHAM </span>
          <div class="tag-line">
            <span> "I AM VENGEANCE" </span>
          </div>
        </div>
      </div>
      <div class="profile-card">
        <div class="image">
          <!-- <img src="image.jpg" alt="" class="profile-img" /> -->
        </div>
        <div class="text-data">
          <span class="name"> Naveed Lihazi </span>
          <span class="destination"> GOTHAM </span>
          <div class="tag-line">
            <span> "I AM VENGEANCE" </span>
          </div>
        </div>
      </div>
      <div class="profile-card">
        <div class="image">
          <!-- <img src="image.jpg" alt="" class="profile-img" /> -->
        </div>
        <div class="text-data">
          <span class="name"> Naveed Lihazi </span>
          <span class="destination"> GOTHAM </span>
          <div class="tag-line">
            <span> "I AM VENGEANCE" </span>
          </div>
        </div>
      </div>
    </section>

    <!-- TimeLine Section -->

    <div class="timeline-section" id="education">
      <h2 class="heading">Education</h2>
      <div class="timeline-items">
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-date">2022</div>
          <div class="timeline-content">
            <h3>Graduation</h3>
            <p>Graduated from University of Gotham</p>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-date">2022</div>
          <div class="timeline-content">
            <h3>Graduation</h3>
            <p>Graduated from University of Gotham</p>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <div class="timeline-date">2022</div>
          <div class="timeline-content">
            <h3>Graduation</h3>
            <p>Graduated from University of Gotham</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

  <title>Start your Journey</title>
  <!-- <link rel="stylesheet" href="responsive_card.css"> -->
  <!-- Box icons CSS link -->
  <!-- Link the css file -->
  <link rel="stylesheet" href="{{ asset('cssfiles/discover.css') }}">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <header>
    <nav>
      <div class="nav__data">
        <a href="#" class="nav__logo">
          <i class="ri-planet-line"></i> CrickInfo
        </a>
      </div>
      <div class="nav_items">
        <a href="{{url('/')}}">Iconic Moments</a>
        <a href="{{url('/discover')}}">Discover</a>
        <a href="#">Teams</a>
      </div>
    </nav>
  </header>

  <div class="items">
    <div class="profile-card">
      <div class="image">
        <!-- Link an image with asset -->
        <img src="{{ asset('image/logo_discover.jpg') }}" alt="" class="profile-img">

        <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
      </div>
      <div class="text-data">
        <span class="name">
          INTERNATIONAL CRICKET
        </span>
        <span class="destination">
          TOURNAMENTS
        </span>

        <div class="buttons">
          <button>SEE MORE</button>
        </div>
      </div>
    </div>
    <div class="profile-card">
      <div class="image">
        <!-- Link an image with asset -->
        <img src="{{ asset('image/logo_discover.jpg') }}" alt="" class="profile-img">

        <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
      </div>
      <div class="text-data">
        <span class="name">
          INTERNATIONAL CRICKET
        </span>
        <span class="destination">
          SERIES
        </span>
        <div class="buttons">
          <button>SEE MORE</button>
        </div>
      </div>



    </div>
    <div class="profile-card">
      <div class="image">
        <!-- Link an image with asset -->
        <img src="{{ asset('image/logo_discover.jpg') }}" alt="" class="profile-img">

        <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
      </div>
      <div class="text-data">
        <span class="name">
          FRANCHIZE CRICKET
        </span>
        <span class="destination">
          IPL/PSL/BPL/BBL
        </span>
        <div class="buttons">
          <button>SEE MORE</button>
        </div>
      </div>



    </div>
  </div>





</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- link the css file with asset -->
  <link rel="stylesheet" href="{{asset('cssfiles/particularplayer.css')}}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Particular Player</title>
</head>
<body>
  <!-- Nav  Bar -->

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
        <a href="{{url('/players')}}">Players</a>
        <a href="{{url('/particularplayer')}}">Sachin Tendulkar</a>

      </div>
    </nav>
  </header>
  <p>I love u</p>
</body>
</html>
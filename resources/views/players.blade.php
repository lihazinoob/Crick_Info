<!DOCTYPE html>
<html lang="en">

<head>
  <!-- link the css  -->
  <link rel="stylesheet" href="{{ asset('cssfiles/players.css') }}">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>

<!--  Thanks to frontendmentor.io for the challenge.  -->

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
        <a href="{{url('/players')}}">Players</a>
      </div>
    </nav>
  </header>

  <div class="card">
    <div class="nft">
      <div class='main'>
      <!-- Connect the image through asset-->
      
      <img class='tokenImage' src="image/Virat_Kohli.jpg" alt="NFT" />
        <h2>Virat Kohli</h2>
        <p class='description'>INDIA</p>

        <hr />
        <div class="buttons">
          <button>SEE MORE</button>
        </div>
      </div>
    </div>

    <div class="nft">
      <div class='main'>
      <!-- Connect the image through asset-->
      
      <img class='tokenImage' src="image/Virat_Kohli.jpg" alt="NFT" />
        <h2>Virat Kohli</h2>
        <p class='description'>INDIA</p>

        <hr />
        <div class="buttons">
          <button>SEE MORE</button>
        </div>
      </div>
    </div>

    <div class="nft">
      <div class='main'>
      <!-- Connect the image through asset-->
      
      <img class='tokenImage' src="image/Virat_Kohli.jpg" alt="NFT" />
        <h2>Virat Kohli</h2>
        <p class='description'>INDIA</p>

        <hr />
        <div class="buttons">
          <button>SEE MORE</button>
        </div>
      </div>
    </div>
  </div>



</body>

</html>
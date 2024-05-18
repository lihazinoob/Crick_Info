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
  <header class="header">

    <a href="/homepage" class="nav__logo">
      <i class="ri-planet-line"></i> CrickInfo
    </a>

    <nav class="navbar">
      <a href="/homepage" class="active"> Iconic Moments </a>
      <a href="/discover"> Discover </a>
      <a href="/"> Your List </a>

    </nav>
    <div class="logout">
      <i class='bx bx-log-out'></i>
      <a href="#">LOGOUT</a>
    </div>
    <div class="image">
      <a href="">
        <img src="image/logo_discover.jpg" alt="">
      </a>

    </div>

  </header>

  <section>
    <div class="card">
      @foreach($players as $player)
      <div class="nft">
        <div class='main'>
          <!-- Connect the image through asset-->

          <img class='tokenImage' src="{{ asset('playersinfo/'.$player->image) }}" alt="NFT" />
          <h2>{{$player->full_name}}</h2>
          <p class='description'>{{$player->country}}</p>

          <hr />
          <div class="buttons">
            <button>
              <a href="/particularplayer/{{$player->id}}">SEE MORE</a>
            </button>
            <button>
              <a href="/addtolist/{{$player->id}}/{{$users->id}}">ADD TO LIST</a>
            </button>
          </div>
        </div>
      </div>
      @endforeach



    </div>

    

  </section>



</body>

</html>
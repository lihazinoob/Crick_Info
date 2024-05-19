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
      

    </nav>
    <div class="logout">
      <i class='bx bx-log-out'></i>
      <a href="/">LOGOUT</a>
    </div>
  </header>

  <section>
    <div class="card">
      @foreach($stadium as $player)
      <div class="nft">
        <div class='main'>
          <!-- Connect the image through asset-->

          <img class='tokenImage' src="{{ asset('stadium/'.$player->coverpicture) }}" alt="NFT" />
          <h2>{{$player->stadiumname}}</h2>
          <p class='description'>{{$player->stadiumlocation}}</p>
          <p class="description">{{$player->stadiumcapacity}}</p>


          <hr />
          <div class="buttons">
            <button>
              <a href="/particularstadium/{{$player->id}}">SEE MORE</a>
            </button>
            
          </div>
        </div>
      </div>
      @endforeach



    </div>

    

  </section>



</body>

</html>
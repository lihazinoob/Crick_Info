<!-- This page for showing the particular International Team  -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <!-- Link the css file with asset -->
  <link rel="stylesheet" href="{{ asset('cssfiles/particularIntlTean.css') }}">
  <title>{{$team->teamname}}</title>
</head>

<body>
  <header class="header" id="home">
    <a href="#home" class="logo"><span>{{$team->teamname}}</span> </a>


    <nav class="navbar">
      <a href="#about"> Know US</a>
      <a href="#players"> Players </a>
      <a href="#history"> Historical Events </a>
      <a href="#gallery"> Gallery </a>

    </nav>
  </header>

  <section class="cover-image">
    <img src="{{asset('teamcoverimages/'.$team->teamcoverimage)}}" alt="">
  </section>

  <section class="about" id="about">
    <h1>About {{$team->teamname}}</h1>
    <div class="about-infoholder">
      <div class="image-holder">
        <img src="{{asset('image/logo_discover.jpg')}}" alt="">
      </div>
      <div class="info-holder">
        <p>Tanzir Mannan Turzo a glorious man who has lived most of his life finding the purpose of it and help other do so . His disciple, Naveed lihazi , always seeks guidance and wisdom from him and in exchange naveed lihazi gives Turzo blowjob during every night. Turzo seems to enjoy every bit of it but deep inside Turzo is depressed and is now more fucked up than ever. He seeks happiness. </p>
      </div>
    </div>
  </section>
  <!-- Players section -->
  <section class="players" id ="players">
    <h1>Our Players</h1>
    <div class="players-infoholder">
      @foreach($team->playerinfos as $playerinfo)
     
      <div class="minip">

        <div class="mg">
          <div class="clr"></div>
          <div class="group">
            <span>Bangladesh</span>
          </div>
        </div>
        <div class="av" >
          <img src="{{asset('playersinfo/'.$playerinfo->image)}}" alt="">
        </div>
        <div class="info">
          <name>{{$playerinfo->country}}</name>
          <deets>
            {{$playerinfo->full_name}}<br>
            {{$playerinfo->playing_role}}
          </deets>
        </div>
        <a class="plot" title="plot with jinkyu" href="/particularplayer/{{$playerinfo->id}}">
          view more →
        </a>
      </div>
      @endforeach
      
      
      
      
      

    </div>


  </section>


</body>

</html>
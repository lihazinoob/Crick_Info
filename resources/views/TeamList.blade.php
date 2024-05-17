<!-- This view is for showing the list of teams in the user panel -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="{{ asset('cssfiles/TeamList.css') }}">
  <title>Team List</title>
</head>

<body>

  <header class="header">
    <a href="#home" class="logo"><span>Teams</span> </a>
    <i class="fa-solid fa-bars" id="menu-icon"></i>

    <nav class="navbar">
      <a href="#men" class="active"> International </a>
      <a href="#services"> IPL </a>
      <a href="#portfolio"> BPL </a>
      <a href="#contact"> BBL </a>
      <a href=""><i class='bx bx-log-out'></i>LOGOUT</a>

    </nav>
  </header>

  <section class="men" id="men">

    <h2>International</h2>
    <div class="items">
      @foreach($teams as $team)
      <div class="profile-card">
        <div class="image">
          <!-- Link an image with asset -->
          <img src="{{ asset('teamicons/'.$team->teamicon) }}" alt="" class="profile-img">

          <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
        </div>
        <div class="text-data">
          <span class="name">
            {{$team->teamname}}
          </span>


          <div class="buttons">
            <button><a href="/particularIntlteam/{{$team->id}}">
                SEE MORE</a></button>
          </div>
        </div>
      </div>
      @endforeach

    </div>

  </section>

  <section class="ipl" id="ipl">
    <h2>IPL Teams</h2>
    <div class="items">
      @foreach($teams as $team)
      <div class="profile-card">
        <div class="image">
          <!-- Link an image with asset -->
          <img src="{{ asset('teamicons/'.$team->teamicon) }}" alt="" class="profile-img">

          <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
        </div>
        <div class="text-data">
          <span class="name">
            {{$team->teamname}}
          </span>


          <div class="buttons">
            <button><a href="/particularIntlteam/{{$team->id}}">
                SEE MORE</a></button>
          </div>
        </div>
      </div>
      @endforeach

    </div>
    </section>
    <section class="bpl" id="bpl">
    <h2>BPL Teams</h2>
    <div class="items">
      @foreach($teams as $team)
      <div class="profile-card">
        <div class="image">
          <!-- Link an image with asset -->
          <img src="{{ asset('teamicons/'.$team->teamicon) }}" alt="" class="profile-img">

          <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
        </div>
        <div class="text-data">
          <span class="name">
            {{$team->teamname}}
          </span>


          <div class="buttons">
            <button><a href="/particularIntlteam/{{$team->id}}">
                SEE MORE</a></button>
          </div>
        </div>
      </div>
      @endforeach

    </div>
    </section>

  


</body>

</html>
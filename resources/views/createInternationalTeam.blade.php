<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <!-- Use asset to link css -->
  <link rel="stylesheet" href="{{ asset('cssfiles/adminpanel.css') }}">

  <title>AdminHub</title>
</head>

<body>


  <section id="sidebar">
    <a href="/adminpanel" class="brand">
      <i class='bx bxs-smile'></i>
      <span class="text">AdminHub</span>
    </a>
    <ul class="side-menu top">
      <li>
        <a href="/create" onclick="showForm('iconic-moment-form')">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Create Iconic Moments</span>
        </a>
      </li>
      <li>
        <a href="/listoficonicmoments" onclick="showForm('list-of-iconic-moment-form')">
          <i class='bx bxs-shopping-bag-alt'></i>
          <span class="text">Iconic Moments</span>
        </a>
      </li>
      <li class="active">
        <a href="/createIntlteams" onclick="showForm('player-create-form')">
          <i class='bx bxs-doughnut-chart'></i>
          <span class="text">Create an International Team</span>
        </a>
      </li>
      <li>
        <a href="/listofIntlteams">
          <i class='bx bxs-message-dots'></i>
          <span class="text">International Teams</span>
        </a>
      </li>


      <li>
        <a href="createplayers">
          <i class='bx bxs-group'></i>
          <span class="text">Create a Player</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-user-detail'></i>
          <span class="text">Update a Player</span>
        </a>
      </li>
      <li>
        <a href="/createStadium">
          <i class='bx bxs-user-detail'></i>
          <span class="text">Create a Stadium</span>
        </a>
      </li>
      <li>
        <a href="/listofstadiums">
          <i class='bx bxs-user-detail'></i>
          <span class="text">Stadiums</span>
        </a>
      </li>

    </ul>
    <ul class="side-menu">

      <li>
        <a href="/logout" class="logout">
          <i class='bx bxs-log-out-circle'></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->



  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class='bx bx-menu'></i>
      <!-- <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search...">
          <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label> -->

    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <!-- Form of creating iconic moments -->



      <!-- Form of creating players -->

      <!-- <div class="player form-container" id="player-create-form">
        <h1>Register Player</h1>
        <div class="container">
          <form action="/listofplayers" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="player-image">Player Image:</label>
              <input type="file" id="image" name="image" accept="image/*" required value="{{old('image')}}">
              @if ($errors->has('image'))
              <p>{{ $errors->first('image') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="full-name">Full Name:</label>
              <input type="text" id="full-name" name="full-name" required value="{{old('full-name')}}">
              @if ($errors->has('full-name'))
              <p>{{ $errors->first('full-name') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="birth-date">Birth Date:</label>
              <input type="date" id="birth-date" name="birth-date" required value="{{old('birth-date')}}">
              @if ($errors->has('birth-date'))
              <p>{{ $errors->first('birth-date') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="batting-style">Batting Style:</label>
              <input type="text" id="batting-style" name="batting-style" placeholder="e.g., Right-handed, Left-handed" value="{{old('batting-style')}}">
            </div>
            <div class="form-group">
              <label for="bowling-style">Bowling Style:</label>
              <input type="text" id="bowling-style" name="bowling-style" placeholder="e.g., Right-arm, Left-arm" value="{{old('bowling-style')}}">
            </div>
            <div class="form-group">
              <label for="playing-role">Playing Role:</label>
              <input type="text" id="playing-role" name="playing-role" required value="{{old('playing-role')}}">
              @if ($errors->has('playing-role'))
              <p>{{ $errors->first('playing-role') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="country">Country:</label>
              <input type="text" id="country" name="country" required value="{{old('country')}}">
              @if ($errors->has('country'))
              <p>{{ $errors->first('country') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="international_team">International Team:</label>
              <input type="text" id="international_team" name="international_team" required value="{{old('international_team')}}">
              @if ($errors->has('international_team'))
              <p>{{ $errors->first('international_team') }}</p>
              @endif
            </div>
            <button type="submit">Submit</button>
          </form>
        </div>

      </div> -->

      <!-- Form of creating international teams -->
      <div class="internationalteam form-container" id="player-create-form">
        <h1>Register International Team</h1>
        <div class="container">
          <form action="/listofinternationalteams" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="teamname">Team Name</label>
              <input type="text" id="teamname" name="teamname" required value="{{old('teamname')}}">
              @if ($errors->has('teamname'))
              <p>{{ $errors->first('teamname') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="teamicon">Team Icon</label>
              <input type="file" id="teamicon" name="teamicon" accept="image/*" required value="{{old('teamicon')}}">
              @if ($errors->has('teamicon'))
              <p>{{ $errors->first('teamicon') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="teamdescription">Team Description:</label>
              <textarea id="teamdescription" name="teamdescription" rows="5" cols="30" required value="{{old("teamdescription")}}"></textarea>
              @if ($errors->has('teamdescription'))
              <p>{{ $errors->first('teamdescription') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="teamcoverimage">Team Image</label>
              <input type="file" id="teamcoverimage" name="teamcoverimage" accept="image/*" required value="{{old('teamcoverimage')}}">
              @if ($errors->has('teamcoverimage'))
              <p>{{ $errors->first('teamcoverimage') }}</p>
              @endif
            </div>


            <div class="form-group">
              <label for="team-coach">Team Coach</label>
              <input type="text" id="team-coach" name="team-coach" required value="{{old('team-coach')}}">
              @if ($errors->has('team-coach'))
              <p>{{ $errors->first('team-coach') }}</p>
              @endif
            </div>


            <div class="form-group">
              <label for="team-coach-image">Team Coach Image</label>
              <input type="file" id="team-coach-image" name="team-coach-image" accept="image/*" required value="{{old('team-coach-image')}}">
              @if ($errors->has('team-coach-image'))
              <p>{{ $errors->first('team-coach-image') }}</p>
              @endif
            </div>



            <button type="submit">Submit</button>

          </form>







    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->
  <!-- Link the js file -->
  <script src="{{ asset('jsfiles/adminpanel.js') }}"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      showForm('iconic-moment-form');
    });
  </script>

</body>
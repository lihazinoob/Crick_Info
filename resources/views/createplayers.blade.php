<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Player Registration</title>
  <!-- link the css file -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('cssfiles/adminpanel.css') }}">
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
      <li>
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


      <li class="active">
        <a href="createplayers">
          <i class='bx bxs-group'></i>
          <span class="text">Create a Player</span>
        </a>
      </li>
      <li>
        <a href="/storeplayers">
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
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class='bx bx-menu'></i>

    </nav>

    <main>

      <div class="player">
        <form action="/listofplayers" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="container">
            <h1>Register Player</h1>
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
            <div class="form-group">
              <label for="facebook">Facebook Link: </label>
              <input type="text" id="facebook_link" name="facebook_link"  value="{{old('facebook_link')}}">
              @if ($errors->has('facebook_link'))
              <p>{{ $errors->first('facebook_link') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="twitter">Twitter Link: </label>
              <input type="text" id="twitter_link" name="twitter_link"  value="{{old('twitter_link')}}">
              @if ($errors->has('twitter_link'))
              <p>{{ $errors->first('twitter_link') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="instagram">Instagram Link: </label>
              <input type="text" id="instagram_link" name="instagram_link"  value="{{old('instagram_link')}}">
              @if ($errors->has('instagram_link'))
              <p>{{ $errors->first('instagram_link') }}</p>
              @endif
            </div>  
            <div class="form-group">
              <label for="test_matches">Test Matches:</label>
              <input type="number" id="test_matches" name="test_matches"  value="{{old('test_matches')}}">
              @if ($errors->has('test_matches'))
              <p>{{ $errors->first('test_matches') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="test_runs">Test Runs:</label>
              <input type="number" id="test_runs" name="test_runs"  value="{{old('test_runs')}}">
              @if ($errors->has('test_runs'))
              <p>{{ $errors->first('test_runs') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="test_wickets">Test Wickets:</label>
              <input type="number" id="test_wickets" name="test_wickets"  value="{{old('test_wickets')}}">
              @if ($errors->has('test_wickets'))
              <p>{{ $errors->first('test_wickets') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="odi_matches">Odi Matches:</label>
              <input type="number" id="odi_matches" name="odi_matches"  value="{{old('odi_matches')}}">
              @if ($errors->has('odi_matches'))
              <p>{{ $errors->first('odi_matches') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="odi_runs">Odi Runs:</label>
              <input type="number" id="odi_runs" name="odi_runs"  value="{{old('odi_runs')}}">
              @if ($errors->has('odi_runs'))
              <p>{{ $errors->first('odi_runs') }}</p>
              @endif
              </div>
            
            <div class="form-group">
              <label for="odi_wickets">Odi Wickets:</label>
              <input type="number" id="odi_wickets" name="odi_wickets"  value="{{old('odi_wickets')}}">
              @if ($errors->has('odi_wickets'))
              <p>{{ $errors->first('odi_wickets') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="t20_matches">T20 Matches:</label>
              <input type="number" id="t20_matches" name="t20_matches"  value="{{old('t20_matches')}}">
              @if ($errors->has('t20_matches'))
              <p>{{ $errors->first('t20_matches') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="t20_runs">T20 Runs:</label>
              <input type="number" id="t20_runs" name="t20_runs"  value="{{old('t20_runs')}}">
              @if ($errors->has('t20_runs'))
              <p>{{ $errors->first('t20_runs') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="t20_wickets">T20 Wickets:</label>
              <input type="number" id="t20_wickets" name="t20_wickets"  value="{{old('t20_wickets')}}">
              @if ($errors->has('t20_wickets'))
              <p>{{ $errors->first('t20_wickets') }}</p>
              @endif
            </div>


          </div>

          <button type="submit">Submit</button>
        </form>
      </div>











    </main>
    <!-- MAIN -->
  </section>



</body>

</html>
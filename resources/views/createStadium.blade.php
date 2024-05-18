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
    <a href="#" class="brand">
      <i class='bx bxs-smile'></i>
      <span class="text">AdminHub</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
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
        <a href="#">
          <i class='bx bxs-message-dots'></i>
          <span class="text">International Teams</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-message-dots'></i>
          <span class="text">Create an IPL Team</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-message-dots'></i>
          <span class="text">IPL Teams</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-message-dots'></i>
          <span class="text">Create a BPL Team</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-message-dots'></i>
          <span class="text">BPL Teams</span>
        </a>
      </li>
      <li>
        <a href="#">
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
      <li class="active">
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

    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="stadium" id="stadium-form">
        <h1>Create a Stadium</h1>
        <div class="container">
          <form action="/storeStadium" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label for="Coverpicture">Cover picture:</label>
              <input type="file" id="Coverpicture" name="Coverpicture" accept="image/*" required value="{{old('Coverpicture')}}">
              @if($errors->has('Coverpicture'))
              <p>{{ $errors->first('Coverpicture') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="Profilepicture">Profile picture:</label>
              <input type="file" id="Profilepicture" name="Profilepicture" accept="image/*" required value="{{old('Profilepicture')}}">
              @if($errors->has('Profilepicture'))
              <p>{{ $errors->first('Profilepicture') }}</p>
              @endif
            </div>

            <div class="form-group">
              <label for="Stadiumname">Stadium name:</label>
              <input type="text" id="Stadiumname" name="Stadiumname" required value="{{old('Stadiumname')}}">
              @if($errors->has('Stadiumname'))
              <p>{{ $errors->first('Stadiumname') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="Location">Location:</label>
              <input type="text" id="Location" name="Location" required value="{{old('Location')}}">
              @if($errors->has('Location'))
              <p>{{ $errors->first('Location') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="Capacity">Capacity:</label>
              <input type="text" id="Capacity" name="Capacity" required value="{{old('Capacity')}}">
              @if($errors->has('Capacity'))
              <p>{{ $errors->first('Capacity') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea id="description" name="description" required value="{{old('description')}}"></textarea>
              @if ($errors->has('description'))
              <p>{{ $errors->first('description') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="topmomenttext1">Top Moments 1:</label>
              <input type="text" id="topmomenttext1" name="topmomenttext1" required value="{{old('topmomenttext1')}}">
              @if($errors->has('topmomenttext1'))
              <p>{{ $errors->first('topmomenttext1') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="topmomentimage1">Top Moment picture 1:</label>
              <input type="file" id="topmomentimage1" name="topmomentimage1" accept="image/*" required value="{{old('topmomentimage1')}}">
              @if($errors->has('topmomentimage1'))
              <p>{{ $errors->first('topmomentimage1') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="topmomenttext2">Top Moments 2:</label>
              <input type="text" id="topmomenttext2" name="topmomenttext2" required value="{{old('topmomenttext2')}}">
              @if($errors->has('topmomenttext2'))
              <p>{{ $errors->first('topmomenttext2') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="topmomentimage2">Top Moments Picture 2:</label>
              <input type="file" id="topmomentimage2" name="topmomentimage2" accept="image/*" required value="{{old('topmomentimage2')}}">
              @if($errors->has('topmomentimage2'))
              <p>{{ $errors->first('topmomentimage2') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="topmomenttext3">Top Moments 3:</label>
              <input type="text" id="topmomenttext3" name="topmomenttext3" required value="{{old('topmomenttext3')}}">
              @if($errors->has('topmomenttext3'))
              <p>{{ $errors->first('topmomenttext3') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="topmomentimage3">Top Moments Picture 3:</label>
              <input type="file" id="topmomentimage3" name="topmomentimage3" accept="image/*" required value="{{old('topmomentimage3')}}">
              @if($errors->has('topmomentimage3'))
              <p>{{ $errors->first('topmomentimage3') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="topmoementtext4">Top Moments 4:</label>
              <input type="text" id="topmomenttext4" name="topmomenttext4" required value="{{old('topmomenttext4')}}">
              @if($errors->has('topmomenttext4'))
              <p>{{ $errors->first('topmomenttext4') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="topmomentimage4">Top Moments Picture 4:</label>
              <input type="file" id="topmomentimage4" name="topmomentimage4" accept="image/*" required value="{{old('topomentimage4')}}">
              @if($errors->has('topmomentimage4'))
              <p>{{ $errors->first('topmomentimage4') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="featuretext">Enter a unique Feature</label>
              <input type="text" id="featuretext" name="featuretext"  required value="{{old('featuretext')}}">
              @if($errors->has('featuretext'))
              <p>{{ $errors->first('featuretext') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="featuredescription">Feature Description</label>
              <textarea id="featuredescription" name="featuredescription" required value="{{old('featuredescription')}}"></textarea>
              @if ($errors->has('featuredescription'))
              <p>{{ $errors->first('featuredescription') }}</p>
              @endif
            </div>
            <div class="form-group">
              <label for="featureimage">Feature picture:</label>
              <input type="file" id="featureimage" name="featureimage" accept="image/*" required value="{{old('featureimage')}}">
              @if($errors->has('featureimage'))
              <p>{{ $errors->first('featureimage') }}</p>
              @endif
            </div>
            <button type="submit">Submit</button>

          </form>
        </div>

      </div>











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
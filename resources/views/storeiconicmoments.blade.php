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
  <link rel="stylesheet" href="{{ asset('cssfiles/storeiconicmoments.css') }}">

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

      <div class="items">
        @foreach ($iconicmoments as $iconicmoment)
        <div class="profile-card">
          <div class="image">
            <!-- Link an image with asset -->
            <img src="{{ asset('iconicmoments/'.$iconicmoment->image) }}" alt="" class="profile-img">

            <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
          </div>
          <div class="text-data">
            <span class="name">
              {{ $iconicmoment->author }}
            </span>
            <span class="destination">
              {{ $iconicmoment->title }}
            </span>
            <span>
              {{ $iconicmoment->topic }}
            </span>
            <span>
              {{ $iconicmoment->description }}
            </span>
            <div class="buttons">
              <a href="/create/{{$iconicmoment->id}}/update">
                <button>UPDATE</button>
              </a>
              <a href="/create/{{$iconicmoment->id}}/delete">
                <button>DELETE</button>
              </a>

            </div>
          </div>
        </div>
        @endforeach




      </div>

      <!-- Form of creating players -->











    </main>
    <!-- MAIN -->
  </section>
  <!-- create a table to show the information of iconicmomets -->\


  <!-- CONTENT -->
  <!-- Link the js file -->
  <script src="{{ asset('jsfiles/adminpanel.js') }}"></script>



</body>
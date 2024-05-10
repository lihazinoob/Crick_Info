<!-- This view is for showing the list of teams in the user panel -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

  <link rel="stylesheet" href="{{ asset('cssfiles/TeamList.css') }}">
  <title>Team List</title>
</head>

<body>

  <header class="header">
    <a href="#home" class="logo"><span>Teams</span> </a>
    <i class="fa-solid fa-bars" id="menu-icon"></i>

    <nav class="navbar">
      <a href="#men" class="active"> Men's International </a>
      <a href="#women"> Women's International </a>
      <a href="#services"> IPL </a>
      <a href="#portfolio"> BPL </a>
      <a href="#contact"> BBL </a>
    </nav>
  </header>

  <section class="men" id="men">

  <h2>Men's International</h2>
    <div class="items">
      
      <div class="profile-card">
        <div class="image">
          <!-- Link an image with asset -->
          <img src="{{ asset('image/logo_discover.jpg') }}" alt="" class="profile-img">

          <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
        </div>
        <div class="text-data">
          <span class="name">
            BANGLADESH
          </span>
          

          <div class="buttons">
            <button>SEE MORE</button>
          </div>
        </div>
      </div>
      <div class="profile-card">
        <div class="image">
          <!-- Link an image with asset -->
          <img src="{{ asset('image/logo_discover.jpg') }}" alt="" class="profile-img">

          <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
        </div>
        <div class="text-data">
          <span class="name">
            BANGLADESH
          </span>
          

          <div class="buttons">
            <button>SEE MORE</button>
          </div>
        </div>
      </div>
      <div class="profile-card">
        <div class="image">
          <!-- Link an image with asset -->
          <img src="{{ asset('image/logo_discover.jpg') }}" alt="" class="profile-img">

          <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
        </div>
        <div class="text-data">
          <span class="name">
            BANGLADESH
          </span>
          

          <div class="buttons">
            <button>SEE MORE</button>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="women" id="women">
    <h2>Women International</h2>
    <div class="items">
    <div class="profile-card">
        <div class="image">
          <!-- Link an image with asset -->
          <img src="{{ asset('image/logo_discover.jpg') }}" alt="" class="profile-img">

          <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
        </div>
        <div class="text-data">
          <span class="name">
            BANGLADESH
          </span>
          

          <div class="buttons">
            <button>SEE MORE</button>
          </div>
        </div>
      </div>
      <div class="profile-card">
        <div class="image">
          <!-- Link an image with asset -->
          <img src="{{ asset('image/logo_discover.jpg') }}" alt="" class="profile-img">

          <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
        </div>
        <div class="text-data">
          <span class="name">
            BANGLADESH
          </span>
          

          <div class="buttons">
            <button>SEE MORE</button>
          </div>
        </div>
      </div>
      <div class="profile-card">
        <div class="image">
          <!-- Link an image with asset -->
          <img src="{{ asset('image/logo_discover.jpg') }}" alt="" class="profile-img">

          <!-- <img src="image/logo_discover" alt="" class="profile-img"> -->
        </div>
        <div class="text-data">
          <span class="name">
            BANGLADESH
          </span>
          

          <div class="buttons">
            <button>SEE MORE</button>
          </div>
        </div>
      </div>
    </div>

  </section>


</body>

</html>
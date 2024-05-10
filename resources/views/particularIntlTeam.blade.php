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

  <section class="cover-image">
    <img src="{{asset('teamcoverimages/'.$team->teamcoverimage)}}" alt="">
  </section>


</body>

</html>
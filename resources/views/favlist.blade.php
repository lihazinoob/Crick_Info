<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Favourite Player</title>
</head>
<body>
  <h1>favourite list</h1>
  @if ($favs->isEmpty())
    <p>No favourite player added yet</p>
  
  @endif
  @foreach ($favs as $fav )
    <?php 
      $player = $fav->playerinfo;
    ?>
    <h2>{{$player->full_name}}</h2>
    <p>{{$player->country}}</p>
  @endforeach
</body>
</html>
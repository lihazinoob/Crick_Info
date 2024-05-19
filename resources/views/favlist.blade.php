<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Favourite Player</title>
</head>

@foreach ($favorites as $favorite)
<li>{{ $favorite->player->full_name }}</li>
<!-- Add more player details as needed -->
@endforeach
</body>

</html>
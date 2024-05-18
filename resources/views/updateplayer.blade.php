<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('cssfiles/createiconicmoments.css') }}">
  <title>Update Player</title>
</head>

<body>

  <yer>UPDATE a Player</h1>
    <div class="container">
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
        </div>

        <button type="submit">Submit</button>
      </form>
    </div>

    </div>
</body>
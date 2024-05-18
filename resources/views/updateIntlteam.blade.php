<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('cssfiles/createiconicmoments.css') }}">
  <title>Update International Team Moments</title>
</head>

<body>
  <h1>Update The International Team</h1>
  <div class="container">
    <form action="/updateIntlteam/{{$internationalteams->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="teamname">Team Name</label>
        <input type="text" id="teamname" name="teamname" required value="{{old('teamname',$internationalteams->teamname)}}">
        @if ($errors->has('teamname'))
        <p>{{ $errors->first('teamname') }}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="teamicon">Team Icon</label>
        <input type="file" id="teamicon" name="teamicon" accept="image/*" value="{{old('teamicon')}}">
        @if ($errors->has('teamicon'))
        <p>{{ $errors->first('teamicon') }}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="teamdescription">Team Description:</label>
        <textarea id="teamdescription" name="teamdescription" rows="5" cols="30" required value="{{old('teamdescription',$internationalteams->teamdescription)}}"></textarea>
        @if ($errors->has('teamdescription'))
        <p>{{ $errors->first('teamdescription') }}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="teamcoverimage">Team Image</label>
        <input type="file" id="teamcoverimage" name="teamcoverimage" accept="image/*" value="{{old('teamcoverimage')}}">
        @if ($errors->has('teamcoverimage'))
        <p>{{ $errors->first('teamcoverimage') }}</p>
        @endif
      </div>






      <button type="submit">Submit</button>


    </form>
  </div>
  <!-- <div class="icon form-container" id="iconic-moment-form"> -->


</body>

</html>
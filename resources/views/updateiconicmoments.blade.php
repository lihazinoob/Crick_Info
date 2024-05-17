<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('cssfiles/createiconicmoments.css') }}">
  <title>Update Iconic Moments</title>
</head>

<body>
   <!-- <div class="icon form-container" id="iconic-moment-form"> -->
    <form action="/updateiconicmoments/{{$iconicmoments->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="container">
        <h1>Submit Your Image</h1>
        <form action="submit.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required value="{{old('image')}}">
            @if($errors->has('image'))
            <p>{{ $errors->first('image') }}</p>
            @endif
          </div>
          <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required value="{{old('description',$iconicmoments->author)}}">
            @if ($errors->has('author'))
            <p>{{ $errors->first('author') }}</p>
            @endif
          </div>
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required value="{{old("title",$iconicmoments->title)}}">
            @if ($errors->has('title'))
            <p>{{ $errors->first('title') }}</p>
            @endif
          </div>
          <div class="form-group">
            <label for="topic">Topic:</label>
            <input type="text" id="topic" name="topic" required value="{{old("topic",$iconicmoments->topic)}}">
            @if ($errors->has('topic'))
            <p>{{ $errors->first('topic') }}</p>
            @endif
          </div>
          <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5" required value="{{old("description",$iconicmoments->description)}}"></textarea>
            @if ($errors->has('description'))
            <p>{{ $errors->first('description') }}</p>
            @endif
          </div>
          <button type="submit">Submit</button>
        </form>
      </div>
    </form>
  </div>
</body>

</html>
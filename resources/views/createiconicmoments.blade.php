<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Submission Form</title>
    <!-- link the css file -->
    <link rel="stylesheet" href="{{ asset('cssfiles/createiconicmoments.css') }}">
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
  <form action="/store" method ="POST" enctype="multipart/form-data">
    @csrf
  <div class="container">
        <h1>Submit Your Image</h1>
        <form action="submit.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="topic">Topic:</label>
                <input type="text" id="topic" name="topic" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="5" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
  </form>
    
</body>
</html>

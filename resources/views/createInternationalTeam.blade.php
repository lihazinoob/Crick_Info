<!-- This file is used to take take the inputs form admin panel for creating an International Team -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create the International Team</title>
  <!-- Link the  css file with asset  -->
  <link rel="stylesheet" href="{{ asset('cssfiles/createInternationalTeam.css') }}">
</head>

<body>
  <form action="/listofteams" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="teamname">Team Name:</label>
      <input type="text" id="teamname" name="teamname" required>
    </div>
    <div class="form-group">
      <label for="teamicon">Team Icon(Image):</label>
      <input type="file" id="teamicon" name="teamicon" accept="image/*" required>
    </div>
    <div class="form-group">
      <label for="teamdescription">Team Description:</label>
      <textarea id="teamdescription" name="teamdescription" required></textarea>
    </div>
    <div class="form-group">
      <label for="teamcoverimage">Team Cover Image (URL):</label>
      <input type="file" id="teamcoverimage" name="teamcoverimage" accept="image/*" required>
    </div>
    <button type="submit">Create Team</button>



  </form>
</body>

</html>
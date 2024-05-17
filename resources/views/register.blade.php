<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/loginaction" method="POST">
    @csrf
    <!-- <input type="text" name="name" id="name" placeholder="Username" required> -->
    <input type="email" name="email" id="email" placeholder="Email" required>
    <input type="password" name="password" id="password" placeholder="Password" required>
    <!-- <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required> -->
    
    <button type="submit">
      Login
    </button>
  </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<!-- This page is for registration  -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('cssfiles/login.css') }}">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <title>Admin Login</title>
</head>

<body>
  <h2>ADMIN LOGIN</h2>
  <div class="container" id="container">
    <div class="form-container sign-in-container">
      <form action="/loginaction" method="POST">
        @csrf
        <h1>Sign in</h1>

        <input type="email" placeholder="Email" name="email" />
        <input type="password" placeholder="Password" name="password" />
        
        <button>Sign In</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>LOGIN and EXPLORE a New WORLD of CRICKET</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello,ADMIN!</h1>
          <p>LOGIN TO CHANGE IN YOUR WEBSITE</p>
          
        </div>
      </div>
    </div>

  </div>
  <div class="adminmessageconatiner">
      USER? 
      <a href="/">LOGIN or SIGNUP</a>
      
  </div>


</body>
<!DOCTYPE html>
<html lang="en">
<!-- This page is for registration  -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('cssfiles/login.css') }}">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <title>ADMIN Login</title>
</head>

<body>
  <h2>ADMIN LOGIN & REGISTRATION</h2>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="/register" method="POST">
        @csrf
        <h1>Create Account</h1>


        <input type="text" name="name" id="name" placeholder="Username" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
        <button>Sign Up</button>
      </form>
    </div>
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
          <h1>Hello, CRICKLOVER!</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
    
  </div>
  <div class="adminmessageconatiner">
      USER? 
      <a href="/homepage">ENTER</a>
      
  </div>

  
  <script src="{{ asset('jsfiles/login.js') }}"></script>
</body>

</html>
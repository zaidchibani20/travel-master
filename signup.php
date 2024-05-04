<?php
   include "connexion.php";
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
    <form method="post" action="signupphp.php">
      <h2>Sign Up</h2>
      <div class="form-group fullname">
        <label for="fullname" >Full Name</label>
        <input type="text" name="fullname" id="fullname" placeholder="Enter your full name">
      </div>
      <div class="form-group email">
        <label for="email">Email Address</label>
        <input type="text"  name="email" id="email" placeholder="Enter your email address">
      </div>
      <div class="form-group password">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
      </div>
    <div class="form-group phone">
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone" placeholder="Select your phone number">
      </div>
      <div class="form-group date">
        <label for="date">Birth Date</label>
        <input type="date" name="date" id="date" placeholder="Select your date">
      </div>
  
      <div class="form-group gender">
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
          <option value="" selected disabled>Select your gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="form-group submit-btn">
        <input type="submit" value="Sign Up" name="signup">
      </div>
    
    <div class="form-link">
        <span>Already have an account? <a href="login.php" class="link login-link">Login</a></span>
    </div>
</form>
    <script src="signup.js"></script>
  </body>
</html>
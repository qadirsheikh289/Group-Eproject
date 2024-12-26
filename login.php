<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lier's</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
	<link href="css/main.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
   <link rel="stylesheet" href="css/login.css">
	 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head>
<body>
<?php include "nav.php"; ?>
     
        <div class="login-container">
    <form class="login-form">
      <h2>Welcome Back</h2>
      <p class="subtitle">Please log in to continue</p>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="login-button">Login</button>
      <p class="forgot-password"><a href="#">Forgot Password?</a></p>
      <p class="signup-link">Don't have an account? <a href="#">Sign up</a></p>
    </form>
  </div>
</header>
</body>
</html>
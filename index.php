<?php
session_start();
if(isset($_SESSION['account_type']) && $_SESSION['account_type']=="FA"){
	header("Location: calls/index.php");
	exit;
	}
elseif(isset($_SESSION['account_type']) && $_SESSION['account_type']=="GA"){
	header("Location: calls/index.php");
	exit;
	}
?>
<!DOCTYPE html>
<html lang="en" >
<head>

  <meta charset="UTF-8">
  <title>AI Call Center Login</title>
  <link rel="icon" href="_assets/Keanu_head.svg">
  <link href="_CSS/style.css" rel="stylesheet" type="text/css"/>
	<link href="_CSS/font_family.css" rel="stylesheet">
  <script type="text/javascript" src="_libraries/jquery-3.6.0.min.js"></script>
  <script src="index.js" type="text/javascript"></script>
</head>

<body>
  <div class="wrapper fadeInDown">
  <div class="title">AI Call Center</div>
  <br>
  <div class="subtitle">"With GPT-Infused Representatives!"</div>
  <br>
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign In </h2>
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="_assets/Kean_University_Logo.svg.png" alt="Kean Logo" height="70" width="70"/>
      </div>
      <!-- Login Form -->
      <form name="input" id="login" method="POST">
        <input id="login_id" type="text" class="fadeIn second" name="login_id" placeholder="Username" required="required">
        <input id="password" type="password" class="fadeIn third" name="password" placeholder="Password" required="required">
        <input type="submit" class="fadeIn fourth" value="login">
      </form>
      <div id="errorMessage" style='color:red'>
      </div>
      <!-- Forgot Password -->
      <div id="formFooter">
        <a class="underlineHover" href="forgot_password/forgot_password.php">Forgot Password?</a>
      </div>
    </div>
  </div>
</body>
</html>
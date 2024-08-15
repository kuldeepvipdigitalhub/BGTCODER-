<?php
  session_start();
  $loggedIn = false;
  if (isset($_SESSION['email'])) {
    $loggedIn = true;
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="content.css">
</head>
<body>
    <nav>
    <a href="index.php"><img src="bgt_logo.jpg" alt="logo" height="70px" width="200px"></a>
            <div class="search_box">
            <input type="search" placeholder="search here">
            <span class="fa fa-search">
                <img src="search icon.png" alt="" height=20px width=20px align="left">
            </span>
        </div>
        <ol>
        <li><a href="signup.php"  class="signup-btn">SIGNUP</a></li>
            <li><a href="login.php" class="login-btn">LOGIN</a></li>
</ol>  
<?php
if(isset($_SESSION['user'])) { // check if user is logged in
  // user is logged in, hide the signup and login buttons
  echo '<a href="logout.php"class="logout-btn">LOGOUT</a>';
  ?>
  <style>
    .signup-btn, .login-btn {
      display: none;
    }
    .logout-btn{
    color: #fff;
    font-size: 20px;
    text-decoration: none;
    letter-spacing: 1px;
    border-radius: 5px
    }
  </style>
  <?php
}
?>       
    </nav>
</nav>
    <div class="bgt-bar-left">
    <a class="bgt-bar" href="index.php " title="HTML Tutorial">HOME</a>
      <a class="bgt-bar" href="htmlintroduction.php " title="HTML Tutorial">HTML</a>
      <a class="bgt-bar" href="css_introduction.php " title="CSS Tutorial">CSS</a>
      <a class="bgt-bar" href="js_introduction.php " title="JavaScript Tutorial">JAVASCRIPT</a>
      <a class="bgt-bar" href="python_introduction.php" title="Python Tutorial">PYTHON</a>
      <a class="bgt-bar" href=" java_introduction.php" title="Java Tutorial">JAVA</a>
      <a class="bgt-bar" href="php_introduction.php " title="PHP Tutorial">PHP</a>
    </div>
    </body>
    </html>
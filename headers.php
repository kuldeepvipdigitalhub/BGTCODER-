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
    <title>home page</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="contact.css" >
    <link rel="stylesheet" href="about.css">
    <style>
 .navbar {
  overflow: hidden;
  background-color: black;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: inherit;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover,.navbar a:focus, .dropdown:hover .dropbtn {
  background-color: #008080;
  color:white;
  border-radius: 10px;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #008080;
  border-radius: 10px;

}

.dropdown:hover .dropdown-content {
  display: block;
}


    </style>
    
</head>
<body>
    
    <input type="checkbox" id="check">
    <nav>
        <!-- <div class="icon">BGT <B style="color: red;" >C</B>ODERS</div> -->
        <img src="bgt_logo.jpg" alt="logo" height="70px" width="200px">
        <div class="search_box">
            <input type="search" name="query" placeholder="search here" action="search.php">
            <span class="fa fa-search">
                <img src="search icon.png" alt="" height=20px width=20px align="left" border-radius:10px>
            </span>
        </div>
        <ol>
            <li><a href="signup.php" class="signup-btn">SIGNUP</a></li>
            <li><a href="login.php"class="login-btn">LOGIN</a></li>
        
</ol>
<?php

if(isset($_SESSION['user'])) { // check if user is logged in
  // user is logged in, hide the signup and login buttons
  echo '<a href="logout.php" class="logout-btn">LOGOUT</a>';
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
    <div class="navbar">
  <a href="index.php">HOME</a>
  <div class="dropdown">
    <button class="dropbtn">TUTORIALS 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="htmlintroduction.php">HTML</a>
        <a href="css_introduction.php">CSS</a>
      <a href="php_introduction.php">PHP</a>
      <a href="js_introduction.php">JAVA SCRIPT</a>
      <a href="java_introduction.php">JAVA</a>
      <a href="python_introduction.php">PYTHON</a>
    </div> 
  </div> 
  <a href="quizform.php">QUIZ</a>
  <a href="about.php">ABOUT US</a>
  <a href="Contact.php">CONTACT US</a>

</div>
</body>
</html>
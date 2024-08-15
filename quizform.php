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
  <title>quizsection</title>
  <style>
    .container h1 {
      font-size:60px
    }
    .container p {
      font-size:50px
    }
    .container h2 {
      font-size:35px
    }
    /* Set background color */
    body {
      background-color: #f7f7f7;
    }

    /* Add styles to quiz buttons */
    .quiz-button {
      display: inline-block;
      border: none;
      padding: 10px;
      margin: 5px;
      cursor: pointer;
      border-radius: 5px;
      color: #fff;
      font-weight: bold;
      text-shadow: 1px 1px #000;
      transition: background-color 0.2s;
      width: 100px;
    }

    /* Add styles to HTML quiz button */
    .html {
      background-color: #f44336;
    }
    .html:hover {
      background-color: #f8796c;
    }

    /* Add styles to CSS quiz button */
    .css {
      background-color: #4CAF50;
    }
    .css:hover {
      background-color: #6abf81;
    }

    /* Add styles to PHP quiz button */
    .php {
      background-color: #2196F3;
    }
    .php:hover {
      background-color: #64b1ed;
    }

    /* Add styles to JavaScript quiz button */
    .javascript {
      background-color: #FFC107;
    }
    .javascript:hover {
      background-color: #ffd156;
    }

    /* Add styles to Python quiz button */
    .python {
      background-color: #9C27B0;
    }
    .python:hover {
      background-color: #c25ad4;
    }

    /* Add styles to Java quiz button */
    .java {
      background-color: #607D8B;
    }
    .java:hover {
      background-color: #8598a7;
    }
    button {
  background-color: #0a5071;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  margin:5px;
}

button:hover {
  background-color: #005ea8;
}
  </style>

</head>
<body>
 
<!-- <nav>
<div class="icon"><a href="index.php">BGT <B style="color: red;" >C</B>ODERS </a> </div>
	<h2><a href="#">Quiz</a></h2>	
		<button onclick="window.history.back()">Back</button>
	</nav> -->
<?php
include("connection.php");
if(isset($_SESSION['user'])) {
  echo "<a href='index.php'><button>BACK</button></a>";
}
else{
  header('location:login.php');
}
?>
<center>
<div class="container">
<br>
<br> 
<br>
				<h1>Boost Your Coding Knowledge</h1>
				<p>
					These are the MCQ's!
				</p>
        </div>
        <br>
<br> 
<br>
<form action="quizprocess.php" method="POST">
   <h2><label for="languages">Select a languages:</label></h2>
  <br>
<br> 
<br>
<br>
  <!-- <select name="languages" id="languages">
    <option value="HTML"><a href="">HTML</a></option>
    <option value="CSS"><a href="">CSS</option>
    <option value="PHP"><a href="">PHP</option>
    <option value="Javascript"><a href="">Javascript</option>
    <option value="Python"><a href="">Python</option>
    <option value="Java"><a href="J">Java</option>
  </select> -->
  <!-- <button type="submit">START QUIZZES</button> -->
  <nav>
  <nav>
  <button type="submit" id="languages" name="languages" value="HTML" class="quiz-button html">HTML</button>
  <button type="submit" id="languages" name="languages" value="CSS" class="quiz-button css">CSS</button>
  <button type="submit" id="languages" name="languages" value="PHP" class="quiz-button php">PHP</button>
  <button type="submit" id="languages" name="languages" value="JAVASCRIPT" class="quiz-button javascript">JavaScript</button>
  <button type="submit" id="languages" name="languages" value="PYTHON" class="quiz-button python">Python</button>
  <button type="submit" id="languages" name="languages" value="JAVA" class="quiz-button java">Java</button>
</nav>

</form>
<br>
<br> 
<br>
<br>
<br> 
<br>

</body>
</html>
</center>

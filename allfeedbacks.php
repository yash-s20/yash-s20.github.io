<!DOCTYPE html>
<html lang="en">
<head>
	<title>Yash Sharma's Homepage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Yash Sharma</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="./index.php">Home</a></li>
        <li ><a href="./bio.html">A Boring Bio</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">What Makes Me Interesting<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./interests.html">Interests and Favourites</a></li>
            <li><a href="./interests.html#ambitions">Ambitions</a></li>
            <li><a href="./interests.html#pastimes">Pastimes</a></li>
          </ul>
        </li>

        <li><a href="./academics.html">Academics</a></li>
        <li><a href="./myprojects.html">My Projects</a></li>
        <li><a href="./contact.html">Contact Me</a></li>
        <li><a href="./feedback.php">Send a Feedback!</a></li>
        <li class="active"><a href="#">View All Feedbacks</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container bg-1 text-center">
	<br>
	<div class="jumbotron" style="background-color: #ad2222">
	   <p><?php
     $feedfile = fopen("allfeedbacks.txt",r) or die("There's a problem");
     if(feof($feedfile)) {
      echo "No feedbacks yet. Add one <a href=\"./feedback.php\">here</a>.";
     }
     while(!feof($feedfile))
     {
      echo fgets($feedfile). "<br>";
     }
     fclose($feedfile);
     ?></p>
	</div>
</div>
</body>
</html>
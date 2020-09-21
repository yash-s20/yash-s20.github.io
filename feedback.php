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

<?php
// define variables and set to empty values
$nameErr = $commentsErr = "";
$name = $comments = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name="";
    }
  }
  
  if (empty($_POST["comments"])) {
    $commentsErr = "Comments are required";
  } else {
    $comments = test_input($_POST["comments"]);
  }
  if($name!=""&&$comments!="") {
  $feedfile = fopen("allfeedbacks.txt", "a") or die("There's a problem");
  fwrite($feedfile, "Name: $name\n");
  fwrite($feedfile, "Comments: $comments\n");
  fclose($feedfile);
  $error = "Thank you for your feedback";}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


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
        <li class="active"><a href="#">Send a Feedback!</a></li>
        <li><a href="./allfeedbacks.php">View All Feedbacks</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container bg-1 text-center">
	<br>
	<div class="jumbotron" style="background-color: #ad2222">
		<h2>Send a feedback about this page to me!</h2>
		<form method="post" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="feedback">
      <?php echo $error; ?>
	      <div class="form-group">
	        <label class="control-label col-sm-2" for="name">Name:</label>
	        <div class="col-sm-10">
            <?php echo $nameErr; ?>
	          <input type="text" class="form-control" id="name" placeholder="Your name here" name="name">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="control-label col-sm-2" for="comments">Comments:</label>
	        <div class="col-sm-10"> 
          <?php echo $commentsErr; ?>         
	          <textarea type="text" class="form-control" id="comments" placeholder="Your valuable feedback here" rows="5" name="comments"></textarea>
	        </div>
	      </div>
	      <div class="form-group">        
	        <div class="col-sm-offset-2 col-sm-10">
	          <button type="submit" class="btn btn-default">Submit</button>
	        </div>
	      </div>
	    </form>
	</div>
</div>
<div class="container bg-3 text-center">
	<br><br><br>
	<br><br><br>
	<br><br><br>
	<br><br><br>
	<br><br><br>
</div>
<div class="container bg-4 text-center">
  <footer><a href="#">back to top</a></footer>
</div>


</body>
</html>
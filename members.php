

<?php


include("includes/header.php");


if(!isset($_SESSION['user_email'])){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<?php

$user = $_SESSION['user_email'];

$get_user = "select * from users where user_email = '$user'";

$run_user = mysqli_query($con, $get_user);

$row = mysqli_fetch_array($run_user);

$user_name = $row['username'];



?>
    
    <title>Find People</title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style/home_style3.css" >

</head>
<body>
  <div class="row">
  <center><h2>Find New People</h2></center><br><br>
  <div class="row">
  <div class="col-sm-4">
  
  
  
  </div>
  <div class="col-sm-4">
  <form class="search_form" action="">
  <input type="text" name="search_user" Placeholder="Search Friend">
  <button class="btn btn-info" type="submit" name="search_user_btn">Search</button> 
  


  
  </form>
  
  </div>

  <div class="col-sm-4">
  
  
  
  </div>
  </div><br> <br>

<?php
search_user();  ?>
  


</div>
</body>
</html>

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
    
    <title><?php echo  $row['username']; ?></title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="row">
  
  <div id="insert_post" class="col-sm-10">
  <center> 
  <form action="home.php?id=<?php echo $user_id ?>;" id="f" method="POST" enctype="multipart/form-data">
  
  
  <textarea style="color: #000000;" class="form-control" id="content" rows="4" name="content" placeholder="What do you want to share?"> </textarea><br>
  
  <label class="btn btn-warning" id="upload_image_button" > Select Image
  
  <input type="file" name="upload_image" size="30">
  
  
  
  </label> 
  <button id="btn-post" class="btn btn-success" name="sub">Post </button>
  </form> 
  <?php 
  insertpost();
  
  
  
  ?>
  </center>
  </div>

  </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DMUhub Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>

body{
    overflow-x: hidden;
    background-color: #4998d1;
}
.main-content{
    width: 50%;
    height: 40%;
    margin:10px auto;
    background-color: #4998d1;
    border: 2px solid #e6e6e6;
    padding: 40px 50px;

}
.header{
    border: 0px solid #000;
    margin-bottom: 5px;

}
.well{
    background-color: #fcba03;

}

</style>


</head>
<body>

<div class="row">
<div class="col-sm-12">

<div class="well">

<center><h3 ><strong>DMUhub ~ Signup page</strong></h3></center>

</div>

<div class="row">

<div class="col-sm-12">

<div class="main-content"> 
<div class="header">
<h3 style="text-align: center; color: white;"><strong>
Join DMUhub now!
</strong></h3><hr>
</div>

<div class="l-part" > 
<form method="POST" action="">

<div class="input-group"  >
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<!-- <label>Firstname</label> -->
<input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name" required="required">
</div>
<br>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name" required="required">
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" placeholder="Password" id="password" name="password" required="required">
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" placeholder="Re-type Password" id="re_password" name="re_password" required="required">
</div>
<br>


<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input type="email" class="form-control" placeholder="Email" id="u_email" name="u_email" required="required">
    </div>
 <br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
<select class="form-control" name="u_role" id="u_role"  required="required">
<option >Select Your Role</option>
<option >Student</option>
<option >Teacher</option>
<option >Administrative Worker</option>
<option >Security</option>
<option >Cafeteria Worker</option>
<option >Sanitary worker</option>
</select>

</div><br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
<select class="form-control input-md" name="u_gender" id="u_gender"  required="required">
<option >Select Your Gender</option>
<option >Male</option>
<option >Female</option>
<option >Others</option>

</select>

</div>
<br>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
<input type="date" class="form-control input-md" placeholder="Birthday" name="u_birthday" id="u_birthday" required="required">
</div><br>
<a style="text-decoration: none, float: left; color: #ffff1a;" data-toggle="tooltip"  title="Signin" href="signin">Already have an account?</a>
  <br><br>
  <center><button id="signup" class="btn btn-lg btn-success" name="sign_up">Signup</button></center>

<?php 

//checking whether the password entered are the same

if (isset($_POST['password'], $_POST['re_password'])) {

if($_POST['password'] !== $_POST['re_password']){
    echo "<script>alert('Please enter same password to proceed');</script>";
    header('signup');
    exit();
}

}

?>

<?php include('insert_user.php');   ?>

</form>
</div>

</div>
</div>


</div>


</div>


</div>

    
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DMUhub Signin</title>
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

.overlap-text{

    position: relative;
    display: flex;
}
.overlap-text a{
    position: absolute;
    top: 8px;
    right: 10px;
    font-size: 14px;
    text-decoration: none;
    font-family:'Overpass Mono', monospace;
    letter-spacing: -1px;
}
</style>


</head>
<body>

<div class="row">
<div class="col-sm-12">

<div class="well">

<center><h3 ><strong>DMUhub ~ Login </strong></h3></center>

</div>
<div class="row">

<div class="col-sm-12">

<div class="main-content"> 
<div class="header">
<h3 style="text-align: center; color: white;"><strong>
Login to DMUhub
</strong></h3><hr>
</div>

<div class="l-part" > 
<form method="POST" action="">

<div class="input-group">
<span  class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<!-- <label>Firstname</label> -->
<input type="email" class="form-control input-md" placeholder="email" id="email" name="email" required="required">
</div>
<br>

<div class="input-group">
<span  class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control input-md" placeholder="Password" id="password" name="passw" required="required">

</div>

<a style="text-decortation:none; float: right; color: #ffffff;" href="forget_password">forgot password?</a>
<br>
<a style="text-decoration: none, float: left; color: #ffff1a;" data-toggle="tooltip"  title="Signin" href="signup">Don't have an account?</a>
  <br><br>
  <center><button id="signin" class="btn btn-lg btn-success" name="login">Login</button></center>


  <?php include('login.php'); ?>

  </form>
</div>

</div>
</div>


</div>


</div>


</div>

</body>
</html>
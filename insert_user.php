<?php

include("includes/connection.php");

if(isset($_POST['sign_up'])){

    $first_name = htmlentities(mysqli_real_escape_string($con, $_POST['first_name']));
   
    $last_name = htmlentities(mysqli_real_escape_string($con, $_POST['last_name']));
   
    $pass = htmlentities(mysqli_real_escape_string($con, $_POST['password']));
  
    $user_email = htmlentities(mysqli_real_escape_string($con, $_POST['u_email']));

    $user_role = htmlentities(mysqli_real_escape_string($con, $_POST['u_role']));

    $user_gender = htmlentities(mysqli_real_escape_string($con, $_POST['u_gender']));

    $user_birthday = htmlentities(mysqli_real_escape_string($con, $_POST['u_birthday']));
   
    $status = "verified";

    $posts = "no";

    $newgid = sprintf('%05d', rand(0, 999999));
   
    $username = strtolower($first_name . "_" . $last_name . "_" . $newgid);

    $check_username_query = "select username from users where user_email='$user_email' ";

    $run_username = mysqli_query($con, $check_username_query);

    // if(strlen($pass) < 9){

    //     echo"<script>window.alert('Password should be minimum 9 characters!')</script>";
    //          exit();
    // }

   $check_email = "select * from users where user_email='$user_email'";

   $run_email = mysqli_query($con,$check_email);

   $check = mysqli_num_rows($run_email);

   if($check == 1){
       echo "<script>alert('User already exist. Please try using another Email.')</script>";
 
       echo "<script>window.open('signup','_self')</script>";
       exit();

 
    }


    $rand = rand(1,3);

    if($rand == 1)
       $profile_pic = "head_red.png";
      else if($rand == 2)
       $profile_pic = "head_sun_flower.png";
       else if($rand == 3)
       $profile_pic = "head_turqoise.png";

$insert = "insert into users (f_name, l_name, username,describe_user,relationship,user_pass,user_email,user_role,user_gender,user_birthday,user_image,user_cover,user_reg_date,status,posts,recovery_account) values('$first_name','$last_name','$username', 'Hello this is Solomon a 4th year Computer Engineering Student','...','$pass','$user_email','$user_role','$user_gender','$user_birthday','$profile_pic','default_cover.jpg',NOW(),'$status','$posts','The best is yet to come.')";

$query = mysqli_query($con, $insert);

if($query){
    echo "<script>alert('Well done $first_name, You are good to go.')</script>";
    echo "<script>window.open('signin','_self')</script>";

}

else{
    
    echo "<script>alert('Registration failed, please try again.')</script>";
    echo "<script>window.open('signup','_self')</script>";
}


}


?>
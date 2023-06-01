<?php




 $get_id = $_GET['post_id'];

$get_com = "select * from comments where post_id='$get_id' ORDER by 1 DESC";

$run_com = mysqli_query($con, $get_com);

while($row_com= mysqli_fetch_array($run_com)){

$com = $row_com['Comment'];

$com_name = $row_com['comment_author'];

$date = $row_com['date'];

$image = $row_com['image'];
echo "

<div class='row'>

<div class='col-md-6 col-md-offset-3'>

<div class='panel panel-info'>

<div class='panel-body'>

<div>

<h4><strong>$image $com_name </strong><i>  commented </i>on $date</h4>
<p class='text-primary' style='margin-left: 5px; font-size: 20px; '>$com</p>


</div>


</div>


</div>

</div>


</div>


";





}






?>
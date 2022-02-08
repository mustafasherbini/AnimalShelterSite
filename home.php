<?php

include 'dp.php';
session_start();

?>
<!DOCTYPE html>


<html>
<head>

	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="new.css">
</head>


<body>
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="profile.php">Profile</a>
  <a href="SharePost.php">Share post</a>


  <a> <?php
 echo ' ' . $_SESSION["userid"] ;


?>
 </a>

 <a href="login.php">logout</a>

</div>

<!--
<div class="header">
  <h2>Recent posts</h2>
</div>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
    </div>*/

-->

<?php
$allposts  = "SELECT * From post "or die(mysqli_error());
$res      = mysqli_query($con,$allposts);
$result   = mysqli_num_rows($res);

if( $result > 0){

   echo' <div class="header">
   <h2>Recent posts</h2>
 </div>';

while($row=mysqli_fetch_assoc($res)){


    echo ' <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <h2>'.$row['description_'].'</h2>
        <h5>'.$row['Price'].' LE   </h5>

        
        <img   width= "500px"   height= "400px" src ='.$row['picturePath'].'> 
        <p>contact me: ' .$row['Email'].'</p>
        <hr>
      </div> '
      
      ;


}

}else {
echo '<div class="header">
  <h2>No posts yet</h2>
</div>';


}







?>





     
</body>



</html>

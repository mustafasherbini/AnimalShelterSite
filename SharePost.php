<?php
session_start();
include 'dp.php';
if(isset($_POST['share'])){
$des = mysqli_real_escape_string($con, $_POST['des']);
$price = mysqli_real_escape_string($con, $_POST['price']);
$path = mysqli_real_escape_string($con, $_POST['filename']);
$time= date("h:i:sa");

if (!is_numeric($price)) {
	$errorp = "price must contain only numbers";	}

if (!$errorp) {

	$sql = "INSERT INTO post( picturePath, description_, Price, Email) VALUES('" . $path. "', '" . $des . "', '" . $price . "', '" . $_SESSION["userid"]. "')"or die(mysqli_error());

	if(mysqli_query($con, $sql)) {
	 header("location: home.php?success = login is success");
	 
	  
	 exit();
   } else {
	 echo "Error: " . $sql . "" . mysqli_error($con);
}
}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Share Post</title>
	<link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body>


<body>


     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
     	<h2>Share Post</h2>
     	
     	<label>Descraption</label>
     	<input  type="text" name="des" placeholder=""><br>

         <label>Price</label>
     	<input type="number" name="price" placeholder=""><br>

         <label>Select photo</label>
         <input type="text"  name="filename">
       
         <button  name="share"  type="submit">Post</button>

		 <button style="text-align: center;" type="submit">
			
			<a class="a" href="home.php" >
Back
			
			</a> 
		</button>


     	<label></label>
     	

     </form>

     
     
</body>
</html>

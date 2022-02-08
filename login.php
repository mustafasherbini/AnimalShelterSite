<?php

session_start();
include 'dp.php';

if(isset($_POST['savel'])){
$email = mysqli_real_escape_string($con, $_POST['emaill']);
$password = mysqli_real_escape_string($con, $_POST['passwordl']);

      

$DATA_password="#$$%^";
 $sql = "SELECT * From `user_` where `Email`='$email'"; // to get a row  

$home=mysqli_query($con, $sql);
	while($row=mysqli_fetch_assoc($home)){  // get the pass of the row 
		$DATA_password=$row["Password"];
	}
  if($DATA_password==$password) {
	$_SESSION["userid"]= $email;
 header("location: home.php?success = login is success");
	
 $ress  = mysqli_query($con,$sql);
 $resultt  = mysqli_num_rows($ress);
while($roww=mysqli_fetch_assoc($ress)){
	$_SESSION["name"]= $roww['username'];
	$_SESSION["phone"]= $roww['Phone'];

}

	 exit();
   } else {
	header("location: login.php?success = login is success");
	 echo "Error: " . $sql . "" . mysqli_error($con);
}

}

?>
<!DOCTYPE html>


<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="sty.css">
	
	<script src="script.js"></script>

</head>
<body>

	<div id="HH" >

	<span id="error"> <span>

	</div>
     <form id="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
     	<h2 id = "t">LOGIN</h2>
     	
     	<label >Email</label>
     	<input id="email" type="email" name="emaill" placeholder=""><br>

     	<label>password</label>
     	<input id="password" type="password" name="passwordl" placeholder=""><br>

		 <button id="save"  onclick="return validation()" name="savel" type="submit">Login</button>

		 <button  >
        <a class="a" href="Regester.php	" >
            Regester
        
        </a> 
        
        </button>
     </form>

	 <button id="ch"  onclick="return prin()" name="sa"  type="submit" >change</button>


     
</body>
</html>

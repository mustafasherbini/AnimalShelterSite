<!DOCTYPE html>

<?php

include 'dp.php';
session_start();

?>


<html>
<head>
	<title>change password</title>
	<link rel="stylesheet" type="text/css" href="sty.css">

</head>

<body>


     <form action="login.html" method="post">
     	<h2>change password</h2>
     	
     
			<label>Current password</label>
			<input type="password" name="curpassword" placeholder=""><br>
	
			<label>New password</label>
			<input type="password" name="newpassword" placeholder=""><br>
	
			<label>New password Confirm</label>
			<input type="password" name="confnew" placeholder=""><br>
	


     	<button style="text-align: center;" type="submit">Update</button>


		 <button style="text-align: center;" type="submit">
			
			<a class="a" href="profile.php" >
Back
			
			</a> 
		</button>

     </form>

	 


     
</body>
</html>

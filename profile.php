
<!DOCTYPE html>
<?php
include 'dp.php';
session_start();
 
// Accessing session data


?>
<html>
<head>
	<title>Settings</title>
	<link rel="stylesheet" type="text/css" href="sty.css">

</head>
<body>

	


     <form  method="post">
     	<h2>Profile</h2>
     	
         <label>Email :<?php

echo ' ' . $_SESSION["userid"] ;


?> </label><br><br>
    
     	<label>Name :<?php
echo ' ' . $_SESSION["name"]  ;


?>  </label><br><br>

        
     	<label>Phone :<?php
echo ' ' . $_SESSION["phone"]  ;


?> 
			 
	</label><br><br>

     


     	<button style="text-align: center;" type="submit">
			
			<a class="a" href="changePass.php" >
				Change password

			
			</a> 
		</button>

		<button style="text-align: center;" type="submit">
			
			<a class="a" href="home.php" >
Back
			
			</a> 
		</button>

     </form>

	 


     
</body>
</html>

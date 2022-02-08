<!DOCTYPE html>

<?php

 include 'dp.php';

 if(isset($_POST['save'])){
$Name = mysqli_real_escape_string($con, $_POST['name']);	
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']); 
$phone = mysqli_real_escape_string($con, $_POST['Phone']); 
$sel = mysqli_real_escape_string($con, $_POST['sel']); 


if (!preg_match("/^[a-zA-Z ]+$/",$Name)) {
$error = "Name must contain only alphabets and space";
}
  
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$error = "Password must be minimum of 6 characters";
}       

if($password != $cpassword) {
$error = "Password and Confirm Password doesn't match";
}
if (!$error) {
     $sql = "INSERT INTO user_(username, Email, Phone,Password) VALUES('" . $Name. "', '" . $email . "', '" . $phone . "', '" . $sel . "')"or die(mysqli_error());
   if(mysqli_query($con, $sql)) {
      header("location: login.php?success = register is success");
	  
       
      exit();
    } else {
      echo "Error: " . $sql . "" . mysqli_error($con);
 }
}
   

      
mysqli_close($con);
}    
     
     
     


?>


<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body>

     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
     	<h2>Registration</h2>
     	
         <label>Email</label>
     	<input type="email" name="email" placeholder=""><br>

     	<label>Name</label>
     	<input type="text" name="name" onkeyup="showSuggestionfs(this.value)" placeholder=""><br>
		<label id="FN"></label>
        
     	<label>Phone</label>
     	<input type="text" name="Phone" placeholder=""><br>

     	<label>password</label>
     	<input type="password" name="password" onkeyup="showSuggestionps(this.value)"  placeholder=""><br>
		<label id="ps"></label>
       
         <label>Confirm password</label>
     	<input type="password" name="cpassword" onkeyup="showSuggestionrps(this.value)" placeholder=""><br>
		<label id="rps"></label>
     	<button style="text-align: center;" name="save" type="submit">Create Accout</button>
     	<button style="text-align: center;" name="cl" type="clear">clear</button>

		 <select name = "sel">
		<option > Egypt </option>	
		<option > USA  </option>	 
		<option > UAE </option>	 
 
		</select>
		 
     </form>


	 <script src="script.js"></script>
     
</body>
</html>

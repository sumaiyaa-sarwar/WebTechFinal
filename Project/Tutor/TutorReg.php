<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="js/TutorReg.js"></script>
<style>
.error {color: #FF0000;}
</style>
</head>  
<body class="banner">
<?php 
require 'res/header.php';
//require 'Controller/storeData.php';
?>

 
<div class="registration">
<fieldset style="width: 400px; margin-left:  -20px;">
<legend>REGISTRATION</legend>                 
  <form method="post" action="<?php echo htmlspecialchars('Controller/storeData.php');?>"> 

  <label for="name"> Name :</label>
  <input type='text' name='name' id='name' onkeyup='checkName()' onblur='checkName()'>
  <span class="error"  id="nameErr"><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span><hr>

  <label for="email">Email :</label>
  <input type='text' name='email' id='email' onkeyup='checkEmail()' onblur='checkEmail()'>
  <span class="error"  id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span><hr>


  <label for="password">Password :</label>
  <input type="password" id="password" name="password" onkeyup="checkPass()" onblur="checkPass()">
  <span class="error"  id="passErr"> <?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];}?></span><hr>

  <label for="confirm_password">Confirm Password :</label>
  <input type="password" id="confirm_password" name="confirm_password" onkeyup="confirmPass()" onblur="confirmPass()">
  <span class="error"  id="confirmPassErr"> <?php if(!empty($_GET['confirmpassErr'])){echo $_GET['confirmpassErr'];}?></span><hr>

<fieldset style="width: 370px">
<legend> Gender</legend>
  <input type="radio" name="gender" id="gender" value="Male"  onblur="checkgender()">
  <label for="Male">Male</label>

  <input type="radio" name="gender" id="ender" value="Female"  onblur="checkgender()">
  <label for="Memale">Female</label> 

  <input type="radio" name="gender" id="gender" value="Other"  onblur="checkgender()">
  <label for="Other">Other </label>  
  <span  class="error" id="genderErr"> <?php  if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];}?></span>
 </fieldset><hr>

<fieldset style="width: 370px">
  <legend>Date of Birthday</legend>
  <input type="date" name="dob" id="dob" onkeyup="checkDOB()" onblur="checkDOB()"> 
  <span  class="error" id="dobErr"><?php if(!empty($_GET['dobErr'])){echo $_GET['dobErr'];}?></span>
</fieldset><hr>

<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>
</fieldset>  
</div>
<?php
//echo $error;
//echo "<br>";
//echo $message;
//echo "<br>";
// if(!empty($message)){
// header("location:../Tutorlogin.php?msg=Registration Completed");  
// }

?>
</div> 
<?php require 'res/footer.php';?>
</body>  
</html>  
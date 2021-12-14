<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title>
<link rel="stylesheet" href="style.css">
<style>
.error {color: #FF0000;}
</style>
<script>  
    function validateform(){} 
    //check pass
        function checkcurrentPass(){
          if (document.getElementById("currentPass").value == "") {
          document.getElementById("currentPassErr").innerHTML = "Password can't be blank";
          document.getElementById("currentPassErr").style.color = "red";
          document.getElementById("currentPass").style.borderColor = "red";
      }else if(document.getElementById("currentPass").value.length<6){
          document.getElementById("currentPass").style.borderColor = "red";
          document.getElementById("currentPassErr").style.color = "red";
        document.getElementById("currentPassErr").innerHTML = "Password must be at least 6 characters long.";
      }
      else{
        document.getElementById("currentPassErr").innerHTML = "";
          document.getElementById("currentPassErr").style.color = "red";
        document.getElementById("currentPass").style.borderColor = "black";
      }
        }
        //confirm pass
        function confirmPass(){
          if (document.getElementById("confirm_password").value == "") {
          document.getElementById("confirmPassErr").innerHTML = "Password can't be blank";
          document.getElementById("confirmPassErr").style.color = "red";
          document.getElementById("confirm_password").style.borderColor = "red";
      }else if(document.getElementById("confirm_password").value.length<6){
          document.getElementById("confirm_password").style.borderColor = "red";
          document.getElementById("confirmPassErr").style.color = "red";
        document.getElementById("confirmPassErr").innerHTML = "Password must be at least 6 characters long.";
      }
      else if(document.getElementById("currentPass").value == document.getElementById("confirm_password").value){
    document.getElementById("confirmPassErr").innerHTML = "Password Matches with previous one";
    document.getElementById("confirmPassErr").style.color = "red";
    document.getElementById("confirm_password").style.borderColor = "red";
  }
      else{
        document.getElementById("confirmPassErr").innerHTML = "";
          document.getElementById("confirmPassErr").style.color = "red";
        document.getElementById("confirm_password").style.borderColor = "black";
      }
        }

        function retypePass(){
          if (document.getElementById("retypePass").value == "") {
          document.getElementById("retypePassErr").innerHTML = "Password can't be blank";
          document.getElementById("retypePassErr").style.color = "red";
          document.getElementById("retypePass").style.borderColor = "red";
      }else if(document.getElementById("retypePass").value.length<6){
          document.getElementById("retypePass").style.borderColor = "red";
          document.getElementById("retypePassErr").style.color = "red";
        document.getElementById("retypePassErr").innerHTML = "Password must be at least 6 characters long.";
      }
      else if(document.getElementById("confirm_password").value != document.getElementById("retypePass").value){
    document.getElementById("retypePassErr").innerHTML = "Password Dosen't Match with New Password";
    document.getElementById("retypePassErr").style.color = "red";
    document.getElementById("retypePass").style.borderColor = "red";
  }
      else{
        document.getElementById("retypePassErr").innerHTML = "";
          document.getElementById("retypePassErr").style.color = "red";
        document.getElementById("retypePass").style.borderColor = "black";
      }
        }
      
</script>  
</head>  
<body class="banner">
<?php 
require 'res/header.php';

?>

<div class="registration">
<fieldset class="div">
<legend>REGISTRATION</legend>                 
  <form method="post"> 

  <label for="currentPass"> Current Password :</label>
  <input type='password' name='currentPass' id='currentPass' onkeyup='checkcurrentPass()' onblur='checkcurrentPass()'>
  <span class="error"  id="currentPassErr"> </span><hr>

  <label for="confirm_password">Confirm Password :</label>
  <input type="password" id="confirm_password" name="confirm_password" onkeyup="confirmPass()" onblur="confirmPass()">
  <span class="error"  id="confirmPassErr"> </span><hr>

  <label for="retypePass">Retype Password :</label>
  <input type="password" id="retypePass" name="retypePass" onkeyup="retyprPass()" onblur="retyprPass()">
  <span class="error"  id="retypePassErr"> </span><hr>

  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="Reset">
</form>
</fieldset>  
</div>

</div> 
<?php require 'res/footer2.php';?>
</body>  
</html>  
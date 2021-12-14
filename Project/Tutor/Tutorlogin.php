<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
<link rel="stylesheet" href="style.css">
<style>
.error {color: #FF0000;}
</style>
<script>  
    //name
    function validateform(){ } 
      function checkName() {
      if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "red";
      }else{
          document.getElementById("nameErr").innerHTML = "";
        document.getElementById("name").style.borderColor = "black";
      }
      
        }

        //password
        function checkPass(){
          if (document.getElementById("password").value == "") {
          document.getElementById("passErr").innerHTML = "Password can't be blank";
          document.getElementById("passErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
      }else if(document.getElementById("password").value.length<6){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("passErr").innerHTML = "Password must be at least 6 characters long.";
      }
      else{
        document.getElementById("passErr").innerHTML = "";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("password").style.borderColor = "black";
      }
        }
      </script>
</head>

<body class= "banner">
<?php 
session_start();
 if (isset($_SESSION['name'])){header("location:Welcome.php");}
 else{require 'res/header.php';}
// require 'Controller/LoginCheck.php';             
?>


<div class="registration">
<form action="Controller/LoginCheck.php" method="post" >
<fieldset style="width: 420px">
<legend>LOGIN</legend>
<div class="container"><?php if(!empty($_GET['jsonmsg'])){echo $_GET['jsonmsg'];} ?>
<?php if(!empty($_GET['alert'])){echo $_GET['alert'];} ?>
  <label for="username" style="font-family: Raleway; font-size: 20px; color: #4d0000;"> User Name </label>
  <input type="text" id="username" name="username" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="usernameErr"><?php if(!empty($_GET['userNameErr'])){echo $_GET['userNameErr'];}?></span>
  <br>
  <label for="Password" style="font-family: Raleway; font-size: 20px; color: #4d0000;"> Password </label>
  <input type="Password" id="Password" name="Password" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="passErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];}?></span>
  <br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me">
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Submit"><a href="changePass.php">Forgot Password?</a>

</fieldset>
</div>

 <?php require 'res/footer.php';?>
</form>
</body>
</html>
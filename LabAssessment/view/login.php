<?php
include('../control/logincheck.php');

if(isset($_SESSION['email'])){
header("location: home.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>

<form action="" method="post">
    <input type="text" name="email" placeholder="Enter your Email" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input name="submit" type="submit" value="LOGIN">
</form>
<br>
<?php echo $error; ?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" href="style.css">
</head>
<body class= "banner">
    <body class = "navbar">

<?php
session_start();
if (isset($_SESSION['name']))
{require 'res/header2.php';}
else{require 'res/header.php';}
 ?>
 
<h1 style="text-align: center;color:black; margin-top: -250px;">Welcome To Our Tutor Hub</h1> 
<h2 style="text-align: center; color:white;"><a href="Offer.php">View Offers</a></h2><br><br><br><br><br><br><br><br>
<?php require 'res/footer.php';?>

</body>
</html>
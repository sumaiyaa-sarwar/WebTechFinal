<?php

session_start();

if (isset($_SESSION['name'])) {
session_destroy();
header("location:Tutorlogin.php");
}

else{
header("location:Tutorlogin.php");
}

 ?>
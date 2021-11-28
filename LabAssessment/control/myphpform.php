<?php
include('../model/db.php');
$Name="";
$email="";
$Password="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Name=$_REQUEST["username"]; 
$email=$_REQUEST["email"]; 
$Password=$_REQUEST["password"];


$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->AddUser($conobj,"User",$Name,$email,$Password);
if($userQuery>0)
{
    echo "Success";
}


} 
 ?>

<?php
$name=$_POST["name"];
$register=$_POST["reg"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$comments=$_POST["comments"];

$conn=new mysqli($name,$register,$email,$phone,$gender,$comments);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
echo    "Connected Successfully";
?>
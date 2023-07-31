<?php
$host="localhost";
$username="root";
$password="";
$db="university";

$conn=mysqli_connect("localhost","root","","university");

$id=$_REQUEST["id"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$Pwd=$_REQUEST["Pwd"];


if(!$conn)
{
die("Connection failed");
}



$sql="Insert into students(ID,Name,Email,Password) values('".$id."','".$name."','".$email."','".$Pwd."')";

if($conn->query($sql)===TRUE)
{
echo"success!";
}
else
{
echo"error";
}

?>

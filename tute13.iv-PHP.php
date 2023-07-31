<?php
$host="localhost";
$username="root";
$password="";
$db="university";

$conn=mysqli_connect("localhost","root","","university");

if(!$conn)
{
die("Connection failed");
}

$sql="SELECT*FROM students";

$result=$conn->query($sql);

if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo $row["Name"]."  ".$row["Email"]."  ".$row["ID"]."  "."<br>";
}

}
else
{
echo"no data";
}

?>
<?php
$con = mysqli_connect('localhost','root','','lautech_db');

$id = $_POST ['uid'];
$Firstname = $_POST ['F'];
$Password = $_POST ['P'];
$Username = $_POST ['U'];
$Email = $_POST ['E'];
$Repeat_Password = $_POST ['RP'];
$Lastname = $_POST ['L'];
$Gender = $_POST ['Gender'];
$DOB = $_POST ['D'];
$Phone = $_POST ['PN'];

$query = mysqli_query($con, "UPDATE customer_tb SET name = '$Firstname', username = '$Username', lastname = '$Lastname', password = '$Password', email = '$Email', repeat_password = 
'$Repeat_Password', gender = '$Gender', dob = '$DOB', phone = '$Phone' WHERE id = '$id'");

// $execute = mysqli_query($con,$query);
if($query)
{
	echo "Successful";
}
else
{
	echo "<font color='red'size='12'>WELCOME $xUsername</font>";
	echo mysqli_error($con);
}
?>
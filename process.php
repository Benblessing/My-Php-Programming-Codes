<?php
$con = mysqli_connect('localhost','root','','lautech_db');


$Firstname = $_POST ['F'];
// $Password = $_POST ['P'];
$Password = sha1($_POST ['P']);
$Username = $_POST ['U'];
$Email = $_POST ['E'];
$Repeat_Password = $_POST ['RP'];
$Lastname = $_POST ['L'];
$Gender = $_POST ['Gender'];
$DOB = $_POST ['D'];
$Phone = $_POST ['PN'];


$query = "insert into customer_tb (name,password,lastname,email,repeat_password,username,gender,dob,phone)
 values ('$Firstname','$Password','$Username','$Email','$Repeat_Password','$Lastname', '$Gender', '$DOB', '$Phone')";
$execute = mysqli_query($con,$query);
if($Firstname == '')
{
	echo "Incorrect Data";

}
else
{
	echo "<font color='red'size='12'>WELCOME $Username</font>";
	echo mysqli_error($con);
}
?>
<?php
$con = mysqli_connect('localhost','root','','lautech_db');
$user = $_POST['v'];
$jUser = json_decode($user);
echo $jUser -> lastname;
mysqli_query($con, "insert into json_tb (firstname, lastname) values ('$jUser->firstname','$jUser->lastname')");
?>
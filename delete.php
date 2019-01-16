<?php
$con = mysqli_connect("localhost", "root", "", "lautech_db");
$id = $_GET['id'];
$query = mysqli_query($con, "DELETE from customer_tb where id='$id'");

include ("view.php");
?>
<?php
    $con = mysqli_connect("localhost","root","","lautech_db");
    $yn = $_POST['yname'];
    $pic = mysqli_query($con, "SELECT picture from passport_tb where name ='$yn'");
    while($a = mysqli_fetch_array($pic)){
        $upix = $a['picture'];
        echo "<img width='400px' src='".$upix."'>";
        // include 'upload.php';
    }
?>
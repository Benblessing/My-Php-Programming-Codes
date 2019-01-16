<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $file = "uploads/".$_FILES["pix"]["name"];
    $fileType = $_FILES["pix"]["type"];
    $fileSize = $_FILES["pix"]["size"];
    $temp = $_FILES["pix"]["tmp_name"];
    $en = $_POST['ename'];
    $con = mysqli_connect("localhost", "root", "", "lautech_db");
    if(move_uploaded_file($temp, $file)){
        echo "File successfully Uploaded";
        $pass = mysqli_query($con, "INSERT into passport_tb(name, picture) values ('$en','$file')");
        // include "upload.php";
    }
}
?>
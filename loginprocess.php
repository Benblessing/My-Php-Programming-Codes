<?php
$email = $_POST ['email'];
$password = $_POST ['password'];
if(!empty($email) AND !empty($password))
{
    $con = mysqli_connect("localhost", "root", "", "lautech_db");
    $query = "SELECT * FROM customer_tb WHERE email = '$email' AND password = '$password'";
    $execute = mysqli_query($con, $query);
    $result = mysqli_fetch_array($execute);
    if($result)
    {
        header('Location:dashboard.php');
    }
    else
    {
        echo "Enter The Correct Info";
        echo mysqli_error($con);
    }
}
else
{
    echo "Fill The Blank Spaces";
    include 'login.php';
}
?>
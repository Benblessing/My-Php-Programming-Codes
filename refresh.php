<?php
$con = mysqli_connect('localhost','root','','lautech_db');
$result = mysqli_query($con, "SELECT * FROM json_tb");
$data = [];
while($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}
echo json_encode($data);
?>
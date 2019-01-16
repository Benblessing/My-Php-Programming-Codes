<?php
    $con = mysqli_connect('localhost','root','','lautech_db');
    $query = mysqli_query($con, "select * from customer_tb");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    
    
</head>
<link rel="stylesheet" href="assets/fontawesome/css/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css">
<body>
    <table width="100%" border=2 class="table table-striped">
        <tr>
            <th>S/N</th><th>NAME</th><th>USERNAME</th><th>LASTNAME</th><th>EMAIL</th><th>GENDER</th>
            <th>D.O.B</th><th>PHONE</th><th>Delete</th><th>Edit</th>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($query)) {
           echo "
            <tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['username']."</td>
                <td>".$row['lastname']."</td>
                <td>".$row['email']."</td>
                <td>".$row['gender']."</td>
                <td>".$row['dob']."</td>
                <td>".$row['phone']."</td>
                <td>"."<a onClick=\"javascript: return confirm('Are you sure you want to delete this data?');\" href='delete.php?id=".$row['id']."'><label><i class='fa fa-trash'></i></label></a>"."</td><label>
                <td>"."<a href='edit.php?id=".$row['id']."'><label><i class='fa fa-edit'></i></label></a>"."</td>
                
            </tr>"; 
        }


        

    ?>
    </table>
   


    
</body>
</html>
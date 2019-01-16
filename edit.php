<?php
$con = mysqli_connect("localhost", "root", "", "lautech_db");
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * from customer_tb where id='$id'");

// include ("view.php");

while ($row = mysqli_fetch_array($query)) {
   
     
        //  $id = $row['uid'];
         $name = $row['name'];
         $password = $row['password'];
         $username = $row['username'];
         $lastname = $row['lastname'];
         $email = $row['email'];
         $gender = $row['gender'];
         $dob = $row['dob'];
         $phone = $row['phone'];
         $repeat_password = $row['repeat_password'];
        //  <td>"."<a href='delete.php?id=".$row['id']."'><label><i class='fa fa-trash'></i></label></a>"."</td><label>
        //  <td>"."<a href='edit.php?id=".$row['id']."'><label><i class='fa fa-edit'></i></label></a>"."</td>
         
      
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<link rel="stylesheet" href="assets/fontawesome/css/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Ben.css">

<body>
	<div class="container-fluid">	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="reg"><h1>Registration Page</h1></div>		
			<form class="form-group" action="process2.php" method="post" role="form">
 				<input type="hidden" name="uid" value= "<?php echo $id; ?> ">
				<label><i class="fa fa-user"></i> Username</label>
				<input type="text" name="U" value= "<?php echo $username; ?> "  class="form-control" required/><br/>
				<label><i class="fa fa-envelope"></i> Email</label>
				<input type="email" name="E" value= "<?php echo $email; ?> " class="form-control" required><br/>
				<label><i class="fa fa-lock"></i> Password</label>
				<input type="password" name="P" value= "<?php echo $password; ?> " class="form-control" required/><br/>
				<label><i class="fa fa-lock"></i> Repeat Password</label>
				<input type="password" name="RP" value= "<?php echo $repeat_password; ?> " class="form-control" required/><br/>
				<label><i class="fa fa-user-plus"></i> Firstname</label>
				<input type="text" name="F" value= "<?php echo $name; ?> "  class="form-control" required/><br/>
				<label><i class="fa fa-user-plus"></i> Lastname</label>
				<input type="text" name="L" value= "<?php echo $lastname; ?> " class="form-control" required/><br/>
				<label>Gender</label>
				<i class="fa fa-male"></i> Male<input type="radio" name="Gender" value="male" checked>
				<i class="fa fa-female"></i> Female<input type="radio" name="Gender" value="female"><br/>		
				<label><i class="fa fa-calendar"></i> Date of Birth</label>
				<input type="date" name="D" value= "<?php echo $dob; ?> " class="form-control" required/><br/>
				<label><i class="fa fa-phone"></i> Phone Number</label>
				<input type="text" name="PN" value= "<?php echo $phone; ?> " class="form-control" required/><br/>
				<!-- <label>Upload image</label> <input type="file" name="pix" class="form-control" required /><br/> -->
				<!-- <a href="view.php">View Users</a><br/> -->
				<!-- <input type="submit"> --><button class="btn btn-success">Submit</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	</div>
</body>
</html>
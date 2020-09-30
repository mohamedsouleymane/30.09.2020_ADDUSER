
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add new user</title>
<link rel="stylesheet" href="resources/css/fstyle.css" />

</head>
<body>
<br />
<div class="form">
	<h1  style="color: white;">New User Registration</h1>
	<h5  style="color: white;">Enter user credentials </h5>
	<hr>
	<?php
	$dt = date("Y.m.d");
	?>
	<form action="userregistration.php" method="post" name="userregistration">
	<input type="text" name="empid" placeholder="Employee ID" required />
	<input type="text" name="empName" placeholder="Employee Full Name" required />
	<input type="text" name="username" placeholder="Enter Employee User Name" required />
	<input type="text" name="userrole" placeholder="Enter Employee User Role" required />
	<input type="text" name="password" placeholder="Enter Employee Password" required />
	<input type="text" name="email" placeholder="Enter Employee Email Address" />
	<input type="text" name="contactno" placeholder="Enter Employee Contact No" />
	<input type="text" name="dateu" value=" <?php echo date("F j, Y");?>"; readonly="">
	<input name="submit" type="submit" value="Save" />
	</form>
</div>

</body>
</html>

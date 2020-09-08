<?php 

$pass = "124578";

$userName = $_POST['userName'];
$passWord = $_POST['passWord'];

if ($passWord == $pass && $userName == "Lyes") {
    echo  "Login with success !";
} else {
    echo " Ahchem choui !!" ;
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>HTML Forms</title>
	</head>
	<body>
		<h1>Forms</h1>

		<form action="handleData.php">
			<!-- Form with get method -->
			<!-- elements -->
			<label for="firstName">Firt Name</label><br />
			<input type="text" name="firstName" /><br />
			<label for="lastName">Last Name</label><br />
			<input type="text" name="lastName" /><br /><br />

			<label for="age">Age</label><br />
			<input type="number" name="age" /><br /><br />

			<input type="submit" value="Send data " />
		</form>
		<hr />

		<form action="handleData.php" method="POST">
			<!-- Form with post method -->
			<!-- elements -->

			<label for="firstName">Firt Name</label><br />
			<input type="text" name="firstName" /><br />
			<label for="lastName">Last Name</label><br />
			<input type="text" name="lastName" /><br /><br />

			<input type="submit" value="Send data " />
		</form>

		<form action="" method="POST">
			<!-- Form with post method -->
			<!-- elements -->

			<label for="userName">User Name</label><br />
			<input type="text" name="userName" /><br />
			<label for="passWord">Password</label><br />
			<input type="password" name="passWord" /><br /><br />

			<input type="submit" value="Sign in" />
		</form>
	</body>
</html>

<?php
$firstnameErr = $emailErr = $usernameErr = $passwordErr = $cnfErr = "";
$firstname	=	$_POST['fstname'];
$lastname	=	$_POST['lstname'];
$username	=	$_POST['username'];
$email	=	$_POST['email'];
$pass	=	$_POST['pass'];
$confirmpassword	=	$_POST['conpass'];
$pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';


$conn=mysqli_connect("localhost","root","","bank");

$qcount ="SELECT * FROM signup";
if ($res = mysqli_query($conn,$qcount)){
	if(mysqli_num_rows($res) < 3){

 $sql = "INSERT INTO signup (firstname,lastname,username,email,pass,confirmpassword) VALUES ('$firstname','$lastname','$username','$email','$pass','$confirmpassword')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record saved successfully !";
        header("location:login3.php");
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	}
else{
	echo"Maximum 3 admins are allowed!";
}
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($firstname)) {
		$firstnameErr = "First name is required";
	} else {
		$firstname = test_input($_POST["fstname"]);
	}

	if (empty($lastname)) {
		$lastname = "";
	} else {
		$lastname = test_input($_POST["lstname"]);
	}

	if (empty($username)) {
		$usernameErr = "Username is required";
	} elseif (strlen($username) < 3) {
		$usernameErr = "Your user name must be atleast 3 characters";
	} elseif (strlen($username) > 15) {
		$usernameErr = "Your user name is too long";
	} elseif (!preg_match("/^[A-Za-z0-9_\.]+$/ ", $username)) {
		$usernameErr = "Your user name must be in letters with either a number, underscore or a dot";
	} else {
		$uname = test_input($_POST["username"]);
	}

	if (empty($password)) {
		$passwordErr = "Password is required";
	} else if (preg_match($pattern, $password)) {
		$password = test_input($_POST["pass"]);
	} else {
		$passwordErr = "Invalid Password";
	}

	if (empty($confirmpassword)) {
		$cnfErr = "Confirmed password is required";
	} elseif ($password != $confirmpassword) {
		$cnfErr = "Passwords do not match";
	} else {
		$confirmpassword = test_input($_POST["conpass"]);
	}

	if (empty($email)) {
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
	}
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
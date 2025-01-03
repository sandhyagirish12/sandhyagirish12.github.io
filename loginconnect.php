<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION["useris"]=$username;

$conn=mysqli_connect("localhost","root","","bank");

$q="select * from signup where username='$username' and pass='$password'";
$res=mysqli_query($conn,$q);

$numrows=mysqli_num_rows($res);
if($numrows==1)
{
header("location:landingpage.php");
?>
<?php
}
?>
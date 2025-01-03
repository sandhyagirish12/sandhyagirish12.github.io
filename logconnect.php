<?php
session_start();
$uname=$_POST['t1'];
$pass=$_POST['t3'];
$_SESSION["useris"]=$uname;

$conn=mysqli_connect("localhost","root","","bank");

$q="select * from custuser where cid='$uname' and cpass='$pass'";
$res=mysqli_query($conn,$q);

$numrows=mysqli_num_rows($res);
if($numrows==1)
{
header("location:index.html");

# header("location:https://testyou.in/");
?>
<?php
}
?>
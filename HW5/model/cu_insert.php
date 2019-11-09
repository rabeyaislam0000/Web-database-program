<?php
include("../controller/config.php");

$name=$_POST['name'];

$uname=$_POST['uname'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];

$sql="INSERT INTO cuinfo(name,  uname,phone, password) VALUES('$name','$uname','$phone','$pass')";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
     header("location:../view/cu_view.php");
}
else
{
	echo "registration fail";
	}

?>

<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "successfull";}
else
{
	echo "not successfull";
}

mysqli_select_db($con,'sessionprac');

$name = $_POST['us'];
$pw = $_POST['ps'];

$q = "select * from signin where name ='$name' && passwor ='$pw' ";
$result =mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION['username'] = $name;
    header('location:welcome.php');
}
	else{
		header('location:login.php');
	}

?>
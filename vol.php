<?php 
 
$con=mysqli_connect('localhost','root');
if($con){
	echo "Your information is safe";
}else{
	echo "No connection";
}

mysqli_select_db($con,'voldata');

$user= $_POST['user'];
$email= $_POST['email'];
$mobile=$_POST['mobile'];
$date= $_POST['date'];
$address= $_POST['address'];

$query=" insert into vol1data (user,email,mobile,,date,address)
values('$user','$email','$mobile','$date','$address')";

mysqli_query($con,$query);

header('location:index.php');
?>

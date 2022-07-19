<?php 
 
$con=mysqli_connect('localhost','root');
if($con){
	echo "Your information is safe";
}else{
	echo "No connection";
}

mysqli_select_db($con,'demo8data');

$user= $_POST['user'];


$query=" insert into data1 (user)
values('$user')";

mysqli_query($con,$query);

header('location:index.php');
?>


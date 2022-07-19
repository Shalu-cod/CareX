<?php 
 
$con=mysqli_connect('localhost','root');
if($con){
	echo "Your information is safe";
}else{
	echo "No connection";
}

mysqli_select_db($con,'demo5data');

$user= $_POST['user'];
$email= $_POST['email'];
$password= $_POST['password'];
$date= $_POST['date'];

$query=" insert into userinfosignupdata (user,email,password,date)
values('$user','$email','$password','$date')";

mysqli_query($con,$query);

header('location:index.php');
?>

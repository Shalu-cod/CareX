<?php 
 
$con=mysqli_connect('localhost','root');
if($con){
	echo "Your information is safe";
}else{
	echo "No connection";
}

mysqli_select_db($con,'demo6data');

$user= $_POST['user'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$address=$_POST['address'];
$online=$_POST['online'];
$date= $_POST['date'];

$query=" insert into doctordata (user,email,mobile,address,online,date)
values('$user','$email','$mobile','$address','$online',$date')";

mysqli_query($con,$query);

header('location:index.php');
?>

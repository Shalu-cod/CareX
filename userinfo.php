<?php 
 
$con=mysqli_connect('localhost','root');
if($con){
	echo "Your information is safe";
}else{
	echo "No connection";
}

mysqli_select_db($con,'demo4data');

$user= $_POST['user'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$comments= $_POST['comments'];

$query=" insert into userinfodata (user,email,mobile,comments)
values('$user','$email','$mobile','$comments')";

mysqli_query($con,$query);

header('location:index.php');
?>



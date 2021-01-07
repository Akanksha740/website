
<?php

//header('location:login.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'flicks');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name='$name'";

$result = mysqli_query($con,$s);

$number = mysqli_num_rows($result);

if($number == 1){
	echo"username already taken";
}else{
	$reg="insert into usertable(name,password) values ('$name','$pass')";
	mysqli_query($con,$reg);
	echo"registration successful";
}

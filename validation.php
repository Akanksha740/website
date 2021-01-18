
<?php



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'flick');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from user where username='$name' && password = '$pass'";

$result = mysqli_query($con,$s);

$number = mysqli_num_rows($result);

if($number == 1){
	$_SESSION['username'] = $name;
	header('location:option.html');
}else{
   echo"unable to login";
}

?>
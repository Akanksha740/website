
<?php



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'flicks');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name='$name' && password = '$pass'";

$result = mysqli_query($con,$s);

$number = mysqli_num_rows($result);

if($number == 1){
	$_SESSION['username'] = $name;
	header('location:home.html');
}else{
   echo"unable to login";
}

?>
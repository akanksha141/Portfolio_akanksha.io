<?php
$username = $_POST['username'];
$email = $_POST['email'];
$sub = $_POST['sub'];
$mess = $_POST['mess'];

if(!empty($username)){
	//create connection
	$con = mysqli_connect('localhost', 'root', '', 'akanksha_portfolio'); 
	if (mysqli_connect_error()) {
	die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
} else {
	$sql = "INSERT INTO contact (username, email, sub, mess) values('$username', '$email', '$sub','$mess')";
if($con->query($sql)){ 
    header("Location: data.html#contact");
    exit();
}
else{
  echo "Error".$sql."<br>".$conn->error;
}
$con->close();
}
}else {
	echo "username should not be empty";
	die();
}
?>
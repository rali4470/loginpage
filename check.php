
<?php
$host 	= "localhost";
$username ="root";
$password ="";
$db_name="user";
// Create connection
$connect = new mysqli($host, $username, $password,$db_name);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$myusername = $_POST['txtUser'];
$mypassword = $_POST['txtPass'];
$sql = "SELECT * FROM members WHERE Username ='$myusername' and Password = '$mypassword'";
 $result=$connect->query($sql);


 if($result->num_rows>0)
    {
	
header("location:login.html");	
}
else{
	$_SESSION['err_login']="*نام کاربری یا پسورد اشتباه است!";
        header('location:login.php');
	
	}

?>
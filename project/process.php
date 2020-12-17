<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $mysql_host = "localhost";
	$mysql_email = "root";
	$mysql_password = "";
    $mysql_database = "ravi";
    
	$u_email = $_POST["user_email"];
	$u_password = $_POST["user_password"];
  
	
    $mysqli = new mysqli($mysql_host, $mysql_email, $mysql_password, $mysql_database);

    if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
    else header('Location: welcome.php'); //"you are registered successfully";	

    $sql="INSERT into ravi (email, password) values('$u_email', '$u_password')";
    $result=$mysqli->query($sql);
    echo $mysqli->error;
}
?>
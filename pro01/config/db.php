<?php
/*	// Create Connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
    }
    
    */


//require('config.php');
//$conn=mysqli_connect('localhost','root','1234','pro01');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()){
echo ' Faild to Connect ' . mysqli_connect_errno();
}
?>
<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "test";


$connection = mysqli_connect($servername,$username,$password,$databaseName);

if (!$connection){
	die("Connection Failed : ".mysqli_connect_error());
}

echo "Connection Successfully !! <br>";

// Define $username and $password 
$username=$_POST['username']; 
$password=md5($_POST['password']);

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

$sql="SELECT * FROM user_profile WHERE Username='$username' and Password='$password'";
$result=mysqli_query($connection, $sql);

// Mysql_num_row is counting table row

$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row

if ($count==1) {

    echo "Login Successfully !!! <br> $count";

} else {

    echo "Incorrect User Name or Password !!! <br> $count";

}

?>
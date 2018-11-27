
<?php
	
$severname = "localhost";
$username = "root";
$password = "";
$databaseName = "test";


$connection = mysqli_connect($servername,$username,$password,$databaseName);

if (!$connection){
	die("Connection Failed : ".mysqli_connect_error());
}

echo "Connection Successfully !! <br>";
	
	$profileid = $_POST['profileid'];
    $fname        = $_POST['fname'];
    $lname        = $_POST['lname'];
    $mobileNo     = $_POST['mobileNo'];
    $email        = $_POST['email'];
    $username     = $_POST['username'];
    $password     = $_POST['password'];
//Insert Query of SQL
$insertRecordQuery =("insert into user_profile(ProfileID,Fname,Lname,PhoneNo,Email,Username,Password,DateCreated) values ('$profileid', '$fname', '$lname', '$mobileNo','$email','$username','$password',NOW())");
if (mysqli_query($connection, $insertRecordQuery)){
	echo "Record Inserted Successfully ";
	
	}
else {
	echo "error in record insertion : ".mysqli_error($connection);
}

$closeConnection = mysqli_close($connection);

If ($closeConnection){
	echo " Connection Closed";
}

else {
	echo " error in closeing";
}

?>
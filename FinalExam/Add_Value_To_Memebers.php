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


//Insert Record

$insertRecordQuery = "INSERT INTO memebers (ProfileID, PageID) VALUES (10005,20001) " ;
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

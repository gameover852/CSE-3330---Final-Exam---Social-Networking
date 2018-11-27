
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
	
    $name        = $_POST['name'];
    $description       = $_POST['description'];
    $category     = $_POST['category'];
	$pageid = mt_rand(1,1000);

//Insert Query of SQL
$insertRecordQuery =("insert into page(PageID,Name,Description,Image) values ('$pageid', '$name', '$description',NULL)");
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
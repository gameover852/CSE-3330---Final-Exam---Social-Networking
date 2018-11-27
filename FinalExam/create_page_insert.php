
<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "test";


$connection = mysqli_connect($servername,$username,$password,$databaseName);

if (!$connection){
	die("Connection Failed : ".mysqli_connect_error());
}

	$username=$_POST['username']; 
    $password=md5($_POST['password']);
    $name        = $_POST['name'];
    $description       = $_POST['description'];
    $category     = $_POST['category'];
	$pageid = mt_rand(1,1000);

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

$sql="SELECT * FROM user_profile WHERE Username='$username' and Password='$password'";
$result=mysqli_query($connection, $sql);

$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row

if ($count==1) {
//Insert Query of SQL
$insertRecordQuery =("insert into page(PageID,Name,Description,Image) values ('$pageid', '$name', '$description',NULL)");
if (mysqli_query($connection, $insertRecordQuery)){
	echo "Record Inserted Successfully ";
	
	}
else {
	echo "error in record insertion : ".mysqli_error($connection);
}
}
 else{

    echo "Incorrect User Name or Password !!! <br> Please log in again to create another page <br> ";

}



$closeConnection = mysqli_close($connection);

If ($closeConnection){
	echo "<br> <br> <br> Connection Closed !!!";
}

else {
	echo " error in closeing";
}

?>
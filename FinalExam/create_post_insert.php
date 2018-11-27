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
    $pagename        = $_POST['pagename'];
    $post       = $_POST['post'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$postid =mt_rand(21001,21999);

$pagename = stripslashes($pagename);
$pagename = mysqli_real_escape_string($connection, $_POST['pagename']);

$sql="SELECT * FROM user_profile WHERE Username='$username' and Password='$password'";
$sql1="SELECT * FROM page WHERE name='$pagename'";
$sql2="SELECT PageID FROM page where name='$pagename'";

$result1=mysqli_query($connection, $sql2);
$pageid= mysqli_fetch_array($result1);
$result=mysqli_query($connection, $sql) and mysqli_query($connection, $sql1);

$count=mysqli_num_rows($result) ;

// If result matched $username and $password, table row must be 1 row

if ($count==1) {
//Insert Query of SQL
$insertRecordQuery =("insert into post(PageID,PostID,Post_text,Date_created) values ('$pageid', '$postid', '$post',NOW())");
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
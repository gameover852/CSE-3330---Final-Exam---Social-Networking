<!DOCTYPE HTML>

<?php
DEFINE ('DB_USER', 'user1');
DEFINE ('DB_PSWD', 'testing1234');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test');

$dbcon = mysqli_connect(DB_HOST , DB_USER, DB_PSWD, DB_NAME);

if (!$dbcon) {
	die('Error Connecting To Database');
	}

echo ' You have connected sussessfully';

?>

<html>
<head>
  
  <script>
    function goBack() {
      window.history.back()
    }
  </script>
 
 <title>Creating a new page</title>
</head>

<body>
  <form>
    Page name:<br>
    <input type="text" name="name" required><br><br>

    Description:<br>
    <input type="text" name="Description" required><br><br>

    Category:<br>
    <select name="category" required>
      <option value="local">Local Business or Place</option>
      <option value="company">Company, Organization, or Insitution</option>
      <option value="product">Product or Brand</option>
      <option value="figure">Artist, Band, or Public Figure</option>
      <option value="entertainment">Entertainment</option>
      <option value="community">Cause or Community</option>
    </select>
    <br><br>
    Header (optional)<br>
     <input type="file" name="pic" accept="image/*"><br><br>

    Username:<br>
    <input type="text" name="username" min="8" max="12" required><br><br>
    
    Password:<br>
    <input type="password" name="password" min="8" max="12" required><br><br>

    <br> <input type="submit" value="Submit">
    <input type="reset">
    <button onclick="goBack()">Go Back</button>
  </form>
</body>





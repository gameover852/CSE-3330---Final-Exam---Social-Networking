<!DOCTYPE HTML>
<html>
<head>

  <script>
  function goBack() {
    window.history.back()
  }
  </script>
  
  <title>Creating a new post</title>

</head>

<body>
  <form action="create_post_insert.php" method="post">
      <h3>Please Login</h3><br>
      User Name:  <input type="text" name="username"><br>
      Password:  <input type="password" name="password"><br><br>
  
      Page Name : <input type="pagename" name="pagename"<br><br>
     Post:<br>
    <input type="text" name="post"  style="width:700px; height:300px;" required><br><br>

    <br> <input type="submit" value="Submit">
    <input type="reset">
    <button onclick="goBack()">Go Back</button>
  </form>
</body>	

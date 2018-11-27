<!DOCTYPE HTML>
<html>
<head>

  <script>
  function goBack() {
    window.history.back()
  }
  </script>
  
  <title>User Log In</title>

</head>

<body>
 <form action="check_user-pass.php" method="POST">
      <h3>Please Login</h3>
      User Name: <input type="text" name="username"><br>
      Password: <input type="password" name="password">
      <input type="submit" name="submit" value="Login!">
  </form>
</body>	

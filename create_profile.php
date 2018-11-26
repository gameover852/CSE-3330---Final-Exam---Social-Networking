<!DOCTYPE HTML>
<html>
<head>

  <script>
  function goBack() {
    window.history.back()
  }
  </script>
  
  <title>Creating a new user</title>
</head>

<body>
  <form>
    First name:<br>
    <input type="text" name="fname" required><br><br>

    Last name:<br>
    <input type="text" name="lname" required><br><br>

    Mobile number:<br>
    <input type="text" name="mobileNo" min="10" max="10" required><br><br>

    Email address<br>
    <input type="text" name="email" min="4" max="100" required><br><br>

    Username:<br>
    <input type="text" name="username" min="8" max="12" required><br><br>

    Password:<br>
    <input type="password" name="password" min="8" max="12" required><br><br>

    <?php
    $created_date = date(Y-m-d);
    $fname        = $_POST['fname'];
    $lname        = $_POST['lname'];
    $mobileNo     = $_POST['mobileNo'];
    $email        = $_POST['email'];
    $username     = $_POST['username'];
    $password     = $_POST['password'];
    ?>

    <br> <input type="submit" value="Submit">
    <input type="reset">
    <button onclick="goBack()">Go Back</button>
  </form>
</body>	

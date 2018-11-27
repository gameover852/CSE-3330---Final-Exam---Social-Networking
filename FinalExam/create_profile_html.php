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
  <form action="create_profile_adding_value.php" method="post" > 
    First name:<br>
    <input class = "input" type="text" name="fname" id="fname"  required><br><br>

    Last name:<br>
    <input class = "input" type="text" name="lname"  id= "lname" required><br><br>

    Mobile number:<br>
    <input class = "input" type="text" name="mobileNo" min="10" max="10" id="mobileNo" required><br><br>

    Email address<br>
    <input class = "input" type="text" name="email" id="email" required><br><br>

    Username:<br>
    <input class = "input" type="text" name="username" min="8" max="12" id="username" required><br><br>

    Password:<br>
    <input  class = "input" type="password" name="password" min="8" max="12"id="password" required><br><br>

    <br> <input type="submit" value="Submit">
    <input type="reset">
    <button onclick="goBack()">Go Back</button>
  </form>
</body>	
</html>

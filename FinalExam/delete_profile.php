<!DOCTYPE HTML>
<html>
<head>

  <script>
  function goBack() {
    window.history.back()
  }
  </script>
  
  <title>Page details</title>

</head>

<body>
  <form>
    Please enter User ID of the profile you wish to delete:<br>
    <input type="text" name="userID" required><br><br>

    Password:<br>
    <input type="password" name="password" min="8" max="12" required><br><br>

    <br> <input type="submit" value="Submit">
    <input type="reset">
    <button onclick="goBack()">Go Back</button>
  </form>
</body>	

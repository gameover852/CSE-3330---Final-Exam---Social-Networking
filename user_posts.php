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
    Please enter the appropriate User ID:<br>
    <input type="text" name="userID" required><br><br>

    <br> <input type="submit" value="Submit">
    <input type="reset">
    <button onclick="goBack()">Go Back</button>
  </form>
</body>	

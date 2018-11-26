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
  <form>
    Post:<br>
    <input type="text" name="post"  style="width:700px; height:300px;" required><br><br>

    <br> <input type="submit" value="Submit">
    <input type="reset">
    <button onclick="goBack()">Go Back</button>
  </form>
</body>	

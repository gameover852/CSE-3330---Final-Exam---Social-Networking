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
    <label for="start">Please select a date:</label>

    <input type="date" id="post_date" name="posts"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">

    <br> <input type="submit" value="Submit">
    <input type="reset">
    <button onclick="goBack()">Go Back</button>
  </form>
</body>	

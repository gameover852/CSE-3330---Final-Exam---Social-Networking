<!DOCTYPE HTML>
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
  <form action="create_page_insert.php" method="post">
    Page name:<br>
    <input type="text" name="name"  id="name" required ><br><br>

    Description:<br>
    <input type="text" name="description" id = "description" required><br><br>

    Category:<br>
    <select name="category" id ="category"required>
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

    <br> <input type="submit" value="Submit">
    <input type="reset">
    <button onclick="goBack()">Go Back</button>
  </form>
</body>





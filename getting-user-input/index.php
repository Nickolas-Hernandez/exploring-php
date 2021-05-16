<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Getting User Input</title>
</head>
<body>

  <form action="index.php" method="get">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" id="name">
  </form>

  <?php
    $name = $_GET["name"];
    echo "$name";
  ?>

</body>
</html>

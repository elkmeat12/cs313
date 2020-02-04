<?php
   require "../temp/dbConnect.php";
   $db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Scripture List</title>
</head>
<body>

   <h1>Scripture Resources</h1>

   <form action="results.php" method="POST">
   Book: <input type="text" name="book"><br><br>
   <input type="submit">
   </form>

</body>
</html>
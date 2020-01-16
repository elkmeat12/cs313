<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Class Exercise</title>

   <style> 
      body {
         text-align: center;
         margin: 50px;
      }

      div {
         border-style: solid;
         padding-bottom: 10px;
      }

      div:nth-child(even) {
         color: red;
      }
   </style>
</head>
<body>
   <?php
      echo "<h2>PHP Team Activity</h2>";

      $count = 0;

      while($count <= 10) {
         echo "<div id='div$count'>This is div #$count</div>";
         ++$count;
      }
   ?>
</body>
</html>
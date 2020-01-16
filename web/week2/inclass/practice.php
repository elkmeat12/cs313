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
      }

      div {
         width: 80%;
         margin: 10px 0 10px 10%;
         border: 1px solid black;
         height: 50px;
         text-align: center;
         vertical-align: middle;
         font-size: 20px;
      }

      div:nth-child(even) {
         color: red;
      }
   </style>
</head>
<body>
   <?php for ($i = 0; $i < 10; $i++) { ?>
      <div id="<?php echo $i; ?>">This is div #<?php echo $i; ?></div>
   
   <?php } ?>
</body>
</html>
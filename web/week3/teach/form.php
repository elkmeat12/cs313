<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Team Activity 2</title>
</head>
<body>
   <form action="display.php" method="POST">
      Name:<br>
      <input type="text" name="name">
      <br><br>
      Email:<br>
      <input type="text" name="email">
      <br><br>
      Major:<br>
      
      <?php
         $majors = array("Computer Science (CS), Web Design (WEB), Computer Information Technology (CIT), Computer Engineering (CE)");
         for ($i=0; $i <= count($majors); $i++)
         {
            foreach($majors as $selected) {
               echo "<input type='radio' name='major' value=$selected[$i]> $selected[$i] <br>";
            }
         }
      ?>
      
      <br>
      Select all of the continents you have visited:<br>
      <input type="checkbox" name="continent[]" value="North America"> North America<br>
      <input type="checkbox" name="continent[]" value="South America"> South America<br>
      <input type="checkbox" name="continent[]" value="Europe"> Europe<br>
      <input type="checkbox" name="continent[]" value="Asia"> Asia<br>
      <input type="checkbox" name="continent[]" value="Australia"> Australia<br>
      <input type="checkbox" name="continent[]" value="Antarctica"> Antarctica<br>
      <br>
      Comments:<br>
      <textarea name="comment" rows="10" cols="30"></textarea>
      <br><br>
      <input type="submit">
   </form>
</body>
</html>
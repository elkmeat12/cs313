<html>
   <body>
      <?php
         $name = htmlspecialchars($_POST["name"]);
         $email = htmlspecialchars($_POST["email"]);
         $major = htmlspecialchars($_POST["major"]);
         $comment = htmlspecialchars($_POST["comment"]);
         $continent = $_POST["continent"];

         echo "Name: $name <br><br>";
         echo "Email: <a href='mailto:$email'>$email</a><br><br>";
         echo "Major: $major<br><br>";
         echo "Comments: $comment<br><br>";

         echo "Visited continents: <br>";
         if (!empty($continent)){
            foreach($continent as $selected){
               echo $selected . "<br>";
            }
         }
         else {
            echo "You should get out of the house more...";
         }
      ?>
   </body>
</html>
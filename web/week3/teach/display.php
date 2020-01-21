<html>
   <body>
      <?php
         $name = htmlspecialchars($_POST["name"]);
         $email = htmlspecialchars($_POST["email"]);
         $major = htmlspecialchars($_POST["major"]);
         $comment = htmlspecialchars($_POST["comment"]);
         $continent = $_POST["continent"];

         echo "Name: $name <br>";
         echo "Email: <a href='mailto:$email'>$email</a><br>";
         echo "Major: $major<br>";
         echo "Comments: $comment";

         if (empty($continent))
         {
            echo "You should get out of the house...";
         }
         else
         {
            for ($i = 0; $i < count($continent); $i++)
            {
               echo $continent[$i] . "<br>";
            }
         }
      ?>
   </body>
</html>
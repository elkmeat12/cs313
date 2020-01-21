<html>
   <body>
      <?php
         $name = htmlspecialchars($_POST["name"]);
         $email = htmlspecialchars($_POST["email"]);
         $major = htmlspecialchars($_POST["major"]);
         $comment = htmlspecialchars($_POST["comment"]);

         echo "Name: $name <br>";
         echo "Email: <a href='mailto:$email'>$email</a><br>";
         echo "Major: $major<br>";
         echo "Comments: $comment";
      ?>
   </body>
</html>
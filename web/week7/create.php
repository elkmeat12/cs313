<?php
   require("../temp/dbConnect.php");
   $db = get_db();

   $username = $_POST['txtUser'];
   $password = $_POST['txtPass'];

   if (!isset($username) || $username == "" || !isset($password) || $password == "")
   {
      header("Location: signUp.php");
      die();
   }

   $username = htmlspecialchars($username);
   $hashedPass = password_hash($password, PASSWORD_DEFAULT);

   $query = 'INSERT INTO w7_users(username, password) VALUES(:username, :password)';
   $stmt = $db->prepare($query);
   $stmt->bindValue(':username', $username);
   $stmt->bindValue(':password', $hashedPass);
   $stmt->execute();

   header("Location: signIn.php");
   die();
?>
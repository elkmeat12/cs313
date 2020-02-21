<?php
   session_start();
   require("../../temp/dbConnect.php");
   $db = get_db();

   $username = $_POST['txtUser'];
   $password = $_POST['txtPass'];
   $verifyPass = $_POST['verifyPass'];

   if (!isset($username) || $username == "" || 
       !isset($password) || $password == "" ||
       !isset($verifyPass) || $verifyPass == "")
   {
      header("Location: register.php");
      die();
   }

   if ($password != $verifyPass)
   {
      header("Location: register.php");
      $_SESSION["notMatch"] = true;
      die();
   }

   $username = htmlspecialchars($username);
   $hashedPass = password_hash($password, PASSWORD_DEFAULT);

   $query = 'INSERT INTO w7_users(username, password) VALUES(:username, :password)';
   $stmt = $db->prepare($query);
   $stmt->bindValue(':username', $username);
   $stmt->bindValue(':password', $hashedPass);
   $stmt->execute();

   header("Location: login.php");
   die();
?>
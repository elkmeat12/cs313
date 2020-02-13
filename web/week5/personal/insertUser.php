<?php
$first = htmlspecialchars($_POST['first_name']);
$last = htmlspecialchars($_POST['last_name']);
$phone = htmlspecialchars($_POST['phone']);
$email = htmlspecialchars($_POST['email']);
$street = htmlspecialchars($_POST['inputStreet']);
$city = htmlspecialchars($_POST['inputCity']);
$state = htmlspecialchars($_POST['inputState']);
$zip = htmlspecialchars($_POST['inputZip']);

require("../../temp/dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO customer (first_name, last_name, email, phone_number, street, city, state, zip_code) 
				 VALUES (:first, :last, :email, :phone, :street, :city, :state, :zip)';
				 
	$statement = $db->prepare($query);

	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
   $statement->bindValue(':email', $email);
   $statement->bindValue(':phone', $phone);
   $statement->bindValue(':street', $street);
   $statement->bindValue(':city', $city);
   $statement->bindValue(':state', $state);
   $statement->bindValue(':zip', $zip);
	$statement->execute();
	
	// get id of last inserted row - save in $userId
	$customerId = $db->lastInsertId("customer_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: confirm.php");

die(); 
?>

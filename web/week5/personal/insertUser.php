<?php
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$street = $_POST['inputStreet'];
$city = $_POST['inputCity'];
$state = $_POST['inputState'];
$zip = $_POST['inputZip'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO customer (first_name, last_name, email, phone_number, street, city, state, zip_code, purchase_date) 
             VALUES (:first, :last, :email, :phone, :street, :city, :state, :zip, :date)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
   $statement->bindValue(':email', $email);
   $statement->bindValue(':phone', $phone);
   $statement->bindValue(':street', $street);
   $statement->bindValue(':city', $city);
   $statement->bindValue(':state', $state);
   $statement->bindValue(':zip', $zip);
   $statement->bindValue(':date', date("Y-m-d"));
	$statement->execute();
	
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
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

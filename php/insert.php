<?php
 
include('confignam.php');

$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['number'];

$insertQuery = "Insert into data_form (email, name , phone) values ('$email', '$name' , '$phone' )";

mysqli_query($connection,$insertQuery) or die ( "Error while inserting " . mysqli_error($connection));

echo "Insertion successfull";

?>

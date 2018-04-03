<?php

include('config.php');

$readQuery = "SELECT * FROM data_form";

$query = mysqli_query($connection,$readQuery) or die ( "Error reading database" . mysqli_error($connection));

$rows = array();

while($row = mysqli_fetch_assoc($query)){
	$rows [] = $row;
}

echo json_encode($rows);

?>

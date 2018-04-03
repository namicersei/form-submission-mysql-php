<?php 

DEFINE("USER_NAME","root");
DEFINE("USER_PASSWORD","goru");
DEFINE("USER_HOST","localhost");
DEFINE("USER_DATABASE","info_form");

$connection = mysqli_connect(USER_HOST,USER_NAME,USER_PASSWORD,USER_DATABASE) or die ("Failed to connect to database " . mysqli_connect_error() )

?>

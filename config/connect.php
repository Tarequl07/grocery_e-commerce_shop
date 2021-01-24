<?php
$connection = mysqli_connect('localhost', 'root', '', 'ecomshop');
if (!connection) {
	echo "Error: Unable to connect MYSQL." . PHP_EOL;
	echo "Debugging Error:" . mysqli_connect_error() . PHP_EOL;
	echo "Debugging Error:" . mysqli_connect_error() . PHP_EOL;
	exit;
}
?>
<?php
$dbname="notedb";
$connection = new mysqli('127.0.0.1','root','',$dbname);
$dbconfig=mysqli_select_db($connection,$dbname);
if ($dbconfig)
{
	//echo "Database Connected";
}
else
{
	echo 'Database connection error';
}

?>
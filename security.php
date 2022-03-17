<?php
session_start();
require('dbconfig.php');
if ($dbconfig) 
{
	//echo "Database Connected";
}
else
{
	header('Location:dbconfig.php');
}
if(isset($_SESSION['uid'])){
$uid=$_SESSION['uid'];}
?>
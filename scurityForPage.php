<?php
session_start();
require('dbconfig.php');
if (!$_SESSION['email']) 
{
header('Location: index.php');
}
$uid=$_SESSION['uid'];
?>
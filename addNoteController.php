<?php
include('security.php');
$date=date("Y-m-d");
$time=date("h:i:sa");
echo "ok0";
if (isset($_POST['save_note'])) 
{	
	$noteTitle=filter_input(INPUT_POST,'noteTitle');
	$noteDescription=filter_input(INPUT_POST,'noteDescription');
	$category=filter_input(INPUT_POST,'category');
	if(isset($_POST['RMtime']) && isset($_POST['RMdate'])){
		$date=$_POST['RMdate'];
		$time=$_POST['RMtime'];
	}
	$sql="INSERT INTO allnotes(uid,title,note,`date`,`time`,category) VALUES ('$uid','$noteTitle','$noteDescription','$date','$time','$category')";
	if ($connection->query($sql)) 
	{
		echo '<script>alert(\"Note Saved\")</script>';
		echo '<script>window.location="dashboard.php"</script>';
	}
	else
	{
		echo "Error: ".$sql."<br>".$connection->error;
		echo '<script>window.location="dashboard.php"</script>';
	}
	$connection->close();
}
$category="BD";
$category="GE";
$category="DE";
$category="RM";
?>
<?php
include('security.php');
if (isset($_POST['DeleteNote'])) 
{	
	$noteID=filter_input(INPUT_POST,'noteid');
	$category=filter_input(INPUT_POST,'category');
	$sql="DELETE  FROM allnotes WHERE nid='$noteID'";
	if ($connection->query($sql)) 
	{
		echo '<script>alert(\"Note Deleted\")</script>';
		echo '<script>window.location="allNotes.php?category='.$category.'"</script>';
	}
	else
	{
		echo "Error: ".$sql."<br>".$connection->error;
		echo '<script>window.location="allNotes.php?category='.$category.'"</script>';
	}
	$connection->close();
}
?>
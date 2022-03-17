<?php
include('security.php');
$Name = filter_input(INPUT_POST,'Name');;
$Email=filter_input(INPUT_POST,'Email');
$Password=filter_input(INPUT_POST,'Password');
if(!empty($Password))
{
	if (mysqli_connect_error())
	{
		die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
		$query="SELECT email FROM users";
		$result=mysqli_query($connection,$query);
		$passcode=mysqli_fetch_array($result);
		if($passcode['email']==$Email)
		{
			echo "<script>alert(\"Already Register With This Email Please Enter Different Email OR login\")</script>";
			header("refresh:1; url=index.php");
		}
		else
		{
			$sql="INSERT INTO users(name,email,password) VALUES ('$Name','$Email','$Password')";
			if ($connection->query($sql)) 
			{
				echo '<script>alert(\"You can Login now\")</script>';
				echo '<script>window.location="index.php"</script>';
			}
			else
			{
				echo "Error: ".$sql."<br>".$connection->error;
			}
			$connection->close();
		}
	}
}
else
{
	echo "<script>alert(\"Enter Password\")</script>";
}
?>
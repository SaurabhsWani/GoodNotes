<?php
include('security.php');
$Email="";
$_SESSION['Email']=filter_input(INPUT_POST,'Email');
$em=$_SESSION['Email'];
$tempPassword=filter_input(INPUT_POST,'Password');    
if(isset($_SESSION['Email']))
{
    $Email=$_SESSION['Email'];
    $query="SELECT * FROM users WHERE email='$em' ";
    $result=mysqli_query($connection,$query);
    $passcode=mysqli_fetch_array($result);
    if($passcode['password']==$tempPassword)
    {
        $_SESSION['name']=$passcode['name'];
        $_SESSION['uid']=$passcode['id'];
        $_SESSION['email']=$passcode['email'];
        echo '<script>window.location="dashboard.php"</script>';
    }
    else{
        echo("<script>alert(\"Something is wrong please try again\");</script>");
        echo '<script>window.location="index.php"</script>';
        session_destroy();
        return false;
    }
}
?>
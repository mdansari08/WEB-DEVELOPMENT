<?php
$servername='localhost';
$username='root';
$password='';
$database='ansari';
$con=mysqli_connect($servername,$username,$password,$database);
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="SELECT * FROM signup WHERE email='$email' AND pass='$pass'";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)==1)
{
header('location:out.html');
exit();
}
else
{
  echo ("<script LANGUAGE='JavaScript'>
      window.alert('Invalid Login.');
     window.location.href='account.php';
      </script>");
exit();
}
?>

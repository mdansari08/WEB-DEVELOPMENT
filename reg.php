<?php

$BC=@mysqli_connect('localhost','root','','ansari') or die('you are not upto the level');

$value1=$_POST['fname'];
$value2=$_POST['lname'];
$value3=$_POST['email'];
$value4=$_POST['pass'];
$value5=$_POST['cpass'];
$value6=$_POST['dob'];


$sql="INSERT INTO signup(fname,lname,email,pass,cpass,dob) VALUES('$value1','$value2','$value3','$value4','$value5','$value6')";


if(!mysqli_query($BC,$sql))
{
  die('not working'.mysqli_error($BC));

}
 mysqli_close($BC);

 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Congratulations,Now you are the Member the Ansari Hotel..!');
    window.location.href='out.html';
    </script>");
?>

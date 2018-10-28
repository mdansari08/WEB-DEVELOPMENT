<?php

$BC=@mysqli_connect('localhost','root','','ansari') or die('you are not upto the level');

$value1=$_POST['naam'];
$value2=$_POST['mail'];
$value3=$_POST['mob'];
$value4=$_POST['sub'];


$sql="INSERT INTO contact(naam,mail,mob,sub) VALUES('$value1','$value2','$value3','$value4')";


if(!mysqli_query($BC,$sql))
{
  die('not working'.mysqli_error($BC));

}
 mysqli_close($BC);

 echo ("<script LANGUAGE='JavaScript'>
     window.alert('Thanks for contacting us! We will be in touch with you shortly.');
    window.location.href='contact.php';
     </script>");
?>

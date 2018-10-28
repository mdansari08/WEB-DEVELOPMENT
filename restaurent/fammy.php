<?php

$BC=@mysqli_connect('localhost','root','','turio') or die('you are not upto the level');

$value1=$_POST['naam'];
$value2=$_POST['email'];
$value3=$_POST['comment'];


$sql="INSERT INTO feedback(naam,email,comment) VALUES('$value1','$value2','$value3')";


if(!mysqli_query($BC,$sql))
{
  die('not working'.mysqli_error($BC));

}
 mysqli_close($BC);

 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Congratulations,Now You Are Member Of Ansari Hotel..!');
 window.location.href='index.html';   
    </script>");
?>

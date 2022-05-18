<?php
$a=$_POST['one'];
$b=$_POST['two'];
$c=$_POST['three'];
$d=$_POST['four'];
$e=$_POST['five'];
$f=$_POST['six'];
$g=$_POST['seven'];
$h=$_POST['e'];
$i=$_POST['nine'];
$j=$_POST['ten'];

$con=mysqli_connect("localhost","root","","test");
$sql="INSERT INTO stdrecord values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "Registration successful";
}
else 
{
    echo "NOT ADDED";    
}

?>
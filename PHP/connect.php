<?php
$host='localhost';
$user='root';
$pass='';

$conn= mysqli_connect($host,$user,$pass );
if(! $conn)
{
	die('could not connect:'.mysqli_connect_error());
}
echo 'connected successfully<br/>';

$sql=' CREATE Database mdb';
if(mysqli_query($conn,$sql))
{ 
	echo " database maybe created  successfully.";
}
else{
echo "sorry, connection failed".mysqli_error($conn);
}
mysqli_close($conn);
?>


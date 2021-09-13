<html>
<head><title> sign up</title>
</head>
<center>
<body background="images/bg1.jpg">
<h2> REGISTER HERE</h2>
<form action="home.php" method="post">
<table border="1" width="300" height="150">
<tr>
<td>Name:</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td>Email Id:</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td colspan="5" align="center" bgcolor="blue"><input type="submit"  name="signup" value="signup"></td>
</tr>
</table>
</form>
</body></center>
</html>


<?php
$conn=mysqli_connect("localhost","root","","mdb") or die (mysqli_connect_error());
//mysqli_select_db("mdb","report") or die(mysqli_connect_error());


if(isset($_POST['signup']))
{
	$name = $_POST['name'];
	$pass = $_POST['password'];
	$emailid = $_POST['email'];
	
	$query="insert into user(name,password,email) values ('$name','$pass','$emailid')";
	if(mysqli_query($conn,$query))
	{
		echo "<h3> YOU HAVE REGISTERED SUCCESSFULLY!! </h3>";
	}
	
}
?>

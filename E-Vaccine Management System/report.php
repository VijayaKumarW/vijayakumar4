<!DOCTYPE html>
<html>
<head>
<title>report page</title>
</head>
<body>
<table bgcolor="yellow" border="2" align="center">
<tr>
<th>username</th>
<th>password</th>
<th>mobileno</th>
<th>DOB</th>
<th>E-MailId</th>
</tr>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="registrationform";
$con=mysqli_connect($servername,$username,$password,$dbname);

	//$name=$_POST['t1'];

$sql="select * from register";
$result=$con->query($sql);
if($result-> num_rows>0){
	while($row=$result-> fetch_assoc()){
		echo"<tr><td>".$row["uname"]."</td><td>".$row["pwd"]."</td><td>".$row["mobileno"]."</td><td>".$row["dob"]."</td><td>".$row["emailid"]."</td></tr>";
	}
	echo"</table>";
}
else
{
	echo"string";
}

?>
</table>
</body>
</html>
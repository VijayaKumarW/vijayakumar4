<html>
<head>
<style>
input[type="submit"]{
height:60px;
background:navy;
color:white;
padding:10px;
border:none;
line-height:30px;
width:100px;
border-radius:5px;
}
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<title>view child details</title>
</head>
<body>
<table border="2" width="100%" bgcolor="yellow"><br>
<tr>
<td>child name</td>
<td>child age</td>
<td>gender</td>
<td>date-of-birth</td>
<td>child city</td>
<td>HospitalName</td>
<td>vaccine</td>
<td>vaccination date</td>
</tr>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="newchild";
$con=mysqli_connect($servername,$username,$password,$dbname);
$sql="select * from child";
$result=$con->query($sql);
if($result-> num_rows>0){
	while($row=$result-> fetch_assoc()){
		
		echo"<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td><td>".$row["childcity"]."</td><td>".$row["hospitalname"]."</td><td>".$row["vaccine"]."</td><td>".$row["vaccinedate"]."</td><td><input type='date' name='d1' value='date'><input type='submit' name='b1' value='send'></td></tr>";
		session_start();
$_SESSION["nextdate"]="d1";
}
	}
else
{
	echo"no records found";
}

?>
</table>
</center>
</body>
</html>
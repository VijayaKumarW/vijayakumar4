<html>
<head>
<style>
input[type="submit"]{
height:50px;
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
<form method="post" action="">
<center>
<p style="color:white; font-size:20px;"><b>Enter the name:</b><input type="text" name="t1">
<input type="submit" name="view" value="view">
</p>
</center>
</form>
<table border="2" width="100%" bgcolor="yellow"><br>
<tr>
<td>child name</td>
<td>child age</td>
<td>gender</td>
<td>date-of-birth</td>
<td>child city</td>
<td>HospitalName</td>
<td>vaccine</td>
<td>start date</td>
<td>end date</td>

</tr>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="newchild";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['view'])){
	$vaccine=$_POST['t1'];
$sql="select * from child where vaccine='$vaccine'";
$result=$con->query($sql);
if($result-> num_rows>0){
	while($row=$result-> fetch_assoc()){
		
		echo"<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td><td>".$row["childcity"]."</td><td>".$row["hospitalname"]."</td><td>".$row["vaccine"]."</td><td>".$row["vaccinedate"]."</td></tr>";
		
}
	}
else
{
	echo"no records found";
}

}
?>
</table>
</center>
</body>
</html>

<?php
if(isset($_POST['submit']))
{	
$servername="localhost";
$username="root";
$password="";
$dbname="newchild";
$con=mysqli_connect($servername,$username,$password,$dbname);

	$name=$_POST['t1'];
	$age=$_POST['t2'];
	$gender=$_POST['t3'];
	$dob=$_POST['t4'];
	$childcity=$_POST['t5'];
	$hospitalname=$_POST['t6'];
	$vaccine=$_POST['t7'];
	$chkstr=implode(",",$vaccine);
	$vaccinedate=$_POST['t8'];
	//$nextdate="";
	if($age>0 && $age<15)
	{		
	$sql="INSERT INTO child VALUES('$name','$age','$gender','$dob','$childcity','$hospitalname','$chkstr','$vaccinedate','add_months($vaccinedate,3)')";
	if (mysqli_query($con, $sql)) {
 echo "<script>alert('New data INSERT successfully')</script>";
} else {
 echo "Error: " . $sql . "<br>" . $con->error;
 }
	}
	
else {
echo "<script>alert('please enter correct age')</script>";
}
	}



	//$result=mysqli_query($con,$sql);
	//echo"<script>alert('added successfully')</script>";
	//}/
//else{
	echo"<p>error</p>";
//}/

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Fira+Sans:ital,wght@0,200;0,500;1,900&family=Road+Rage&display=swap" rel="stylesheet">
<title>Add New Child</title>
</head>
<body>
<?php
include"topnav.php";
?>
<form method="post" action="">
<div class="container">
<h3 class="page-header"> Add New Child</h3>
<div class="frm">
<div class="box">
<label>name:</label>
<input type="text" name="t1" placeholder="Enter the Child name" required>
<label>age:</label>
<input type="number" name="t2"  placeholder="Enter the Child age" required>
<label>child gender:</label>
<select name="t3">
<option value="male">male</option>
<option value="female">female</option>
</select>
<label>child date of birth</label>
<input type="date" name="t4" placeholder="Enter the dob" required>
<label>Child City</label>
<select name="t5" class="dropdownlist" required>
<option value="cuddalore">cuddalore</option>
</select>
<label>Hospital Name</label>
<select name="t6" class="dropdownlist" required>
<option value="hospital 1">hospital 1</option>
<option value="hospital 2">hospital 2</option>
<option value="hospital 3">hospital 3</option>
<option value="hospital 4">hospital 4</option>
<option value="hospital 5">hospital 5</option>
</select>
<br>
<label>select the vaccine</label>
<label>BCG</label><input type="checkbox" name="t7[]" value="BCG">
<label>Hepatitis B Birth dose</label><input type="checkbox" name="t7[]" value="Hepatitis B Birth dose"></p>
<label>OPV Birth dose</label><input type="checkbox" name="t7[]" value="OPV Birth dose"></p>
<label>Pentavelant</label><input type="checkbox" name="t7[]" value="Pentavelant"></p>
<label>Rota virus vaccine</label><input type="checkbox" name="t7[]" value="Rota virus vaccine"></p>
<br>
<label>vaccine date</label>
<input type="date" name="t8" required>
<input type="submit" name="submit" value="Add Child">
<a href="parentindex.php" type="button" >back</a><br><br><br>
</div>
</div>
</div>
</form>
</body>
</html>


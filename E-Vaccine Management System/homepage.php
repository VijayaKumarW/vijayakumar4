<html>
<head>
<style>
h1
{
	font-size:60px;
	color:white;
	font-weight:bold;
	text-align:center;
	margin:0 auto;
	text-shadow:1px 1px solid white;
	display:inline-flex;
	text-shadow:3px 4px 2px red ;
	justify-content:center;
	font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.footer{
	float:left;
	width:100%;
	height:100px;
	display:flex;
	margin:0 auto;
	background:teal;
	color:white;
	text-align:center;
	line-height:20px;	
}
#hero{
	text-align: center;
}
#hero a{
background:transparent;
height:50px;
color:white;
padding:10px;
margin-left:39%;
margin-top:5%;
border:3px solid white;
display:block;
line-height:40px;
font-family:TimesNewRoman, serif;
font-weight:200;
font-size:30px;
width:15%;
transition:0.6s ease;
cursor:pointer;
border-radius:10px;
text-align:center;
text-decoration:none;
transform:translateX(20px),translateY(20px)
}
#hero a:hover{
	background:url('images4.jpg');
	color:white;
	transition:0.6s ease;
	border:1px solid transparent;
	transform: translate(10px);
}

</style>	
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Fira+Sans:ital,wght@0,200;0,500;1,900&family=Road+Rage&display=swap" rel="stylesheet">
  <title>Home Page</title>
</head>
<?php
include"topnav.php";
?>
<body>
<div id="hero">
<br><br>
<h1><b><span>Welcome to Vaccine Management System<br></span><b></h1><br><br>
<a href="login.php">Login</a>
</center>
</div>
</body>
</html>

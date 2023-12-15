<?php

if($_POST['t1']=="vijay" && $_POST['t2']=="kumar")
{
	echo "<script>location.href='slot.php'</script>";
}
else
{
	echo "<script>alert('username or password incorrect')</script>";
}
?>
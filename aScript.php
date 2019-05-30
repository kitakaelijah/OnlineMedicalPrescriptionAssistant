<?php

$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("onlinempa",$con)or die(mysql_error());

$sql="SELECT * FROM rega WHERE email='$_POST[email]' and password='$_POST[password]'";

$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count<1){echo "Wrong Username or Password";
            include("adminlogin.php");}
else
	{
		header("location:ahome.php");
	}

ob_end_flush();
?>

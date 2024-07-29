<?php
 include("config.php");
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$a = $_POST['admin_username'];
	$b = $_POST['admin_email'];
	
	$c=md5($_POST['admin_password']);
	
	$qry=mysql_query("INSERT INTO event.admin_info(adm_username,adm_email,adm_pass)
	VALUES('$a','$b','$c')");
	
	if($qry==true)
	{
		echo"<center>"."successfully form has been submited" ."</center>";
		}
		else{
		echo "request method is not POST";
		}
 }	
	
	
?>
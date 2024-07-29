<?php
 include("config.php");
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$a = $_POST['admin_username'];
	$b = $_POST['admin_email'];
	
	
	
	$qry=mysql_query("UPDATE admin_info SET adm_username='$a' WHERE  adm_email='$b'");
	
	
	if($qry==true)
	{
		echo"<center>"."updated" ."</center>";
		}
		else{
		echo "not".mysql_error();
		}
 }	
	
	
?>
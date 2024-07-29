<?php
 include("config.php");
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$a = $_POST['customer_username'];
	$b = $_POST['customer_email'];
	$c=md5($_POST['customer_password']);
    $d = $_POST['customer_full_name'];
	
	$qry=mysql_query("INSERT INTO event.customer_info(cust_username,cust_email,cust_password,cust_fullname)
	VALUES('$a','$b','$c','$d')");
	
	if($qry==true)
	{
		echo"<center>"."successfully form has been submited" ."</center>";
		}
		else{
		echo "request method is not POST";
		}
 }	
	
	
?>
<?php 
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{ 
    $u_name=$_POST['name']; 
    $u_pass= md5($_POST['pass']);

    $qry=mysql_query("UPDATE demo.user_info SET  u_password='$u_pass' WHERE user.u_username='$u_name'");

    if($qry==true)
    { 
      echo "Password Changed";
    }
    else
    {
        echo "not".mysql_error();
    }
    
   
}
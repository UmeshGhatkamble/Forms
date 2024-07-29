<?php 
  include("config.php");
  if($_SERVER['REQUEST_METHOD']=='POST');
  {

    $a= $_POST['username'];
    $b= md5($_POST['password']);
    $c= $_POST['email'];

  

  $qry=mysql_query("UPDATE user_info SET  u_password='$b',u_email='$c' WHERE u_username='$a'");

  if($qry==true)
   {
    echo "updated";
   }
   else{

    echo"not".mysql_error();
   }
}
 
   
   ?>
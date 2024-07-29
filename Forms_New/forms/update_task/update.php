<?php 
  include("config.php");
  if($_SERVER['REQUEST_METHOD']=='POST');
  {

    $a= $_POST['username'];
    $b= $_POST['address'];
    $c= md5($_POST['password']);
    $d= $_POST['email'];

  

  $qry=mysql_query("UPDATE user_info SET  u_password='$c',u_email='$b' WHERE u_username='$a'");

  if($qry==true)
   {
    echo "updated";
   }
   else{

    echo"not".mysql_error();
   }
}
 
   
   ?>
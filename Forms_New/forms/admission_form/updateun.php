<?php 
  include("config.php");
  if($_SERVER['REQUEST_METHOD']=='POST')
  {

    $a= $_POST['username'];
    $b= md5($_POST['password']);
    $c= $_POST['reg_email'];

  

  $qry=mysql_query("UPDATE reg_info SET  reg_pass='$b', reg_email='c' WHERE reg_username='$a'");

  if($qry==true)
   {
    echo "updated";
   }
   else{

    echo"you have enter username or email wrong!".mysql_error();
   }
}
 
   
   ?>
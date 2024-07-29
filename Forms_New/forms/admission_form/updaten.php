<?php 
  include("config.php");
  if($_SERVER['REQUEST_METHOD']=='POST')
  {

    $a= $_POST['username'];

    $b= $_POST['contact'];

   
   
   
   
   

  

  $qry=mysql_query("UPDATE reg_info SET reg_username='$a'  WHERE reg_cont='$b'");

  if($qry==true)
   {
    echo "updated";
   }
   else{

    echo"you have enter username or email wrong!".mysql_error();
   }
}
 
   
   ?>



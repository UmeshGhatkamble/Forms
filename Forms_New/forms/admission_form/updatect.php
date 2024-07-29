<?php 
  include("config.php");
  if($_SERVER['REQUEST_METHOD']=='POST')
  {

    $a= $_POST['username'];
    $b= $_POST['contact'];
 

  

  $qry=mysql_query("UPDATE reg_info SET  reg_cont='$b' WHERE reg_username='$a'");

  if($qry==true)
   {
    echo "updated";
   }
   else{

    echo"not".mysql_error();
   }
}
 
   
   ?>
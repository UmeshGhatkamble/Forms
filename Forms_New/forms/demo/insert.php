 <?php 
  include("config.php");
  if($_SERVER['REQUEST_METHOD']=='POST');
  {

    $a= $_POST['username'];
    $b= md5($_POST['password']);
    $c= $_POST['email'];

  

  $qry=mysql_query("INSERT INTO demo.user_info (u_username,u_password,u_email) values('$a','$b','$c')");

  if($qry==true)
   {
    echo "<center>"."inserted"."<center>";
   }
   else{

    echo"not".mysql_error();
   }
  }
   
   ?>
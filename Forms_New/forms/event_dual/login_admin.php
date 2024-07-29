<?php 
    session_start();
    include("config.php");
    if(isset($_SESSION['login_admin']) )  
    { header("location:home.php");
    }
    if($_SERVER["REQUEST_METHOD"] =="POST")
    {
        $myusername = $_POST['username'];

       
        $myemail = $_POST['email'];
     
        $sql="SELECT adm_id FROM admin_info WHERE adm_username='$myusername' AND adm_email='$myemail ' ";

        
        $result=mysql_query( $sql );
        $row=mysql_fetch_array($result);

        $count=mysql_num_rows($result);
        if($count== 1)
            
        {   
            $_SESSION['login_admin']=$myusername;
            header("location:home.php");
        }
        else
        {
            echo"Your login name or email is invalid!";

        }
    }
    ?>

    <html>
        <head>
        </head>
        <body>
            <center>
            <form action="" method="POST"> 
            <br>
        <br>
        <h2>Enter the details to Log In.</h2>
        <br>
        <br>
        <p>Login using username and email</p>
        <input type="text" id="username" name="username" value="" placeholder="Enter username" ><br><br>


                <input type="email" id="email" name="email" value="" placeholder="Enter email" ><br><br>

              

               <input type="submit" value="Log In">
            </form>
           
        
            <p> For New User Register here</p>
            <button> <a class="" href="event.php">register here</a></button>
            <button> <a class="" href="pfargot.php"> fargot password</a></button>

            </center>
        </body>






    </html>
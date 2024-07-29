<?php
    include("config.php");
    if($_SERVER['REQUEST_METHOD']=='post');

    {
        $name=$_post['stdName'];
        $add=$_post['address'];
        $mob=$_post['mobile'];
        $email=$_post['email'];
        $caste=$_post['caste'];
        $year=$_post['year'];

        $qry=mysql_query("INSERT INTO school_db.registration_info
        ( std_name,std_address,std_mobile,std_email,std_caste,std_year)
         VALUES ('$name','$add','$mob','$email','$caste','$year')");


        if($qry==true)
            { echo"<center>"." inserted"."</center>";
            }
            else
            {
                echo "not".mysql_error();
       
            }
    }       
    ?>
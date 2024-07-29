<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Registration form</title><br><br>
    <link rel="stylesheet" href="style.css"/>
</head>
<body background="bg_form.jpg">
    <center>
        <div>
        <table border="black">
        <form id ="reg" action="connect.php" method="post">
            <img src="logo_form.png" width="15%" height="30%">

            <h1> Registration form</h1><br><br>
    

            <hr> <h2><i><b> Enter your personal details below</b> </i></h2><hr>


           <tr>
		   <td><input type="text" name="username" id="usename" value=""
		   placeholder="enter username" > <a href="update.php">edit.</a>
        </br></br></td></tr>
		   <td><input type="number" name="reg_cont" id="cont" value=""
            placeholder="users contact" > <a href="update_cont.php">edit.</a> </br></br></td> </tr>
            <tr><td><input type="text" name="reg_email" id="email"value=""
            placeholder="Email"> <a href="update_email.php">edit</a> </br></br> </td></tr>
            <tr><td><input type="password" name="reg_pass" id="pass" value=""
            placeholder="Enter the password"> <a href="update_user.php"> edit.</a> </br> </td></tr>
</table>
</div><br>

           <span> <input type="reset" name="reset" value="Refresh">&nbsp;&nbsp;&nbsp;

            <button type="submit">submit</button>
            <button> <a href="login1.php">Login</a></button>
            </span>
 

&copy; UG 
        </form></center>

  
</body>
</html>
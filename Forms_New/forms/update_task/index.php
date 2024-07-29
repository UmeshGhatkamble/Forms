<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>document update</title>
</head>
<body>
    <center>
    <form action="update.php" method="POST">
        <H2>UPDATE REGIRSTRATION FORM </H2>

        <P>Enter your personal details below </P>
        <input type="text" name="username" id="username" value="" placeholder="enter username"> <a href="username.php">edit</a> <br>
        <input type="text" name="address" id="username" value="" placeholder="enter address"> <a href="add_upd.php">edit</a><br>
        <input type="password" name="password" id="password" value="" placeholder="enter  password"> <a href="pass_upd.php">edit</a><br>
        <input type="email" name="email" id="email" value="" placeholder="enter email"><a href="email_upd.php">edit</a><br>
        
        <button type="submit">submit</button>
      

    </form>
   
   
    <!-- #region <button> <a href="index.php">back to registration</a></button>-->
    </center>
</body>
</html>
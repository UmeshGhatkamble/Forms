<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <link rel="stylesheet" href="event_styles.css">
</head>
<body>
    <div class="container">
        <div class="admin-form">  
            <h2>Event Management Admin Registration</h2>
            <form action="admin_middleware.php" method="POST">
                <label for="admin_username">Username:</label>
                <input type="text" name="admin_username" ><a href="eusername.php">edit username</a>

                <label for="admin_email">Email:</label>
                <input type="email" name="admin_email" ><a href="eemail.php">edit email</a>

                <label for="admin_password">Password:</label>
                <input type="password" name="admin_password" ><a href="epassword.php">edit password</a>

               

                <button type="submit">Register as Admin</button>
             
                

            </form>
            <button ><a href="login_admin.php">login as admin </a></button>


        </div>

        
    </div>
</body>
</html>

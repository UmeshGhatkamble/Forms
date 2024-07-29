<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer</title>
    <link rel="stylesheet" href="event_cust_styles.css">
</head>
</head>
<body>
    <div class="customer-form">
        <h2>Event Customer Registration</h2>
        <form action="customer_middleware.php" method="post">
            <label for="customer_username">Username:</label>
            <input type="text" name="customer_username" >

            <label for="customer_email">Email:</label>
            <input type="email" name="customer_email" >

            <label for="customer_password">Password:</label>
            <input type="password" name="customer_password" >

            <label for="customer_full_name">Full Name:</label>
            <input type="text" name="customer_full_name" >

            <button type="submit">Register as Customer</button>
        </form>
    </div>
    
</body>
</html>
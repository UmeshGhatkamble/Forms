<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body  >
    <div class="container">
        <div class="admin-form">
            <h2>Event Management Admin Registration</h2>
            <form action="event.php" method="POST">
                <!-- Admin form fields here -->
                <button type="submit">Register as Admin</button>
            </form>
        </div>

        <div class="customer-php" id="a" >
            <h2>Event Customer Registration</h2>
            <form action="customer.php" method="POST">
                <!-- Customer form fields here -->
                <button type="submit">Register as Customer</button>
               
            </form>
        </div>
    </div>
</body>
</html>

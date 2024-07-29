<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hospital Registration Form</h2>
        <form action="hospital_middleware.php" method="post">
            <label for="hospital_name">Hospital Name:</label>
            <input type="text" name="hospital_name" required><br>

            <label for="address">Address:</label>
            <input type="text" name="address" required><br>

            <label for="contact_number">Contact Number:</label>
            <input type="text" name="contact_number" required><br>

            <label for="specialty">Specialty:</label>
            <input type="text" name="specialty" required><br>

            <button type="submit">Register Hospital</button>
        </form>
    </div>
</body>
</html>

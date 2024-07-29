<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Parking Registration Form</h2>
    <form action="middleware.php" method="post">
        <label for="vehicle_number">Vehicle Number:</label>
        <input type="text" name="vehicle_number" required><br>

        <label for="owner_name">Owner Name:</label>
        <input type="text" name="owner_name" required><br>

        <label for="contact_number">Contact Number:</label>
        <input type="text" name="contact_number" required><br>

        <label for="parking_duration">Parking Duration (in hours):</label>
        <input type="number" name="parking_duration" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

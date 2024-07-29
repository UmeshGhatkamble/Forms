<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Social Media Registration Form</h2>
        <form action="insert.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" required><br>

            <label for="gender">Gender:</label>
            <select name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br>

            <label for="birthdate">Birthdate:</label>
            <input type="date" name="birthdate" required><br>

            <label for="interests">Interests:</label>
            <input type="text" name="interests" placeholder="Enter your interests"><br>

            <label for="newsletter">Subscribe to Newsletter:</label>
            <input type="checkbox" name="newsletter" value="1"><br>

            <label for="terms">Agree to Terms and Conditions:</label>
            <input type="checkbox" name="terms" value="1" required><br>

            <label for="notification_preference">Notification Preference:</label>
            <input type="radio" name="notification_preference" value="email" checked>Email
            <input type="radio" name="notification_preference" value="sms">SMS<br>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadhar Card Registration</title>
    <link rel="stylesheet" href="aadhar_styles.css">
</head>
<body>
    <div class="container">
        <h2>Aadhar Card Registration Form</h2>
        <form action="aadhar_middleware.php" method="post" enctype="multipart/form-data">
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" required><br>

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

            <label for="birthdate">Date of Birth:</label>
            <input type="date" name="birthdate" required><br>

            <label for="address">Address:</label>
            <textarea name="address" rows="4" required></textarea><br>

            <label for="phone_number">Phone Number:</label>
            <input type="tel" name="phone_number" pattern="[0-9]{10}" required><br>

            <label for="occupation">Occupation:</label>
            <input type="text" name="occupation" required><br>

            <label for="marital_status">Marital Status:</label>
            <input type="radio" name="marital_status" value="single" checked> Single
            <input type="radio" name="marital_status" value="married"> Married<br>

            <label for="education_level">Education Level:</label>
            <select name="education_level" required>
                <option value="high_school">High School</option>
                <option value="college">College</option>
                <option value="university">University</option>
            </select><br>

            <label for="languages_known">Languages Known:</label>
            <input type="checkbox" name="languages_known[]" value="english"> English
            <input type="checkbox" name="languages_known[]" value="hindi"> Hindi
            <input type="checkbox" name="languages_known[]" value="other"> Other<br>

            <label for="upload_photo">Upload Photo:</label>
            <input type="file" name="upload_photo" accept="image/*"><br>

            <!-- Additional Fields... -->

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>School Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>School Information Form</h2>
       
<div>
<form action="insert.php" method="post">


    <label for="stdName">Student Name:</label>
    <input type="text" id="stdName" name="stdName" >

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" >

    <label for="mobile">Mobile Number:</label>
    <input type="number" id="mobile" name="mobile" >

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" >

    <label for="caste">Caste:</label>
    <input type="text" id="caste" name="caste" >

    <label for="year">Year:</label>
    <input type="text" id="year" name="year" >

    <button type="submit">Submit</button>
</form>
</div>
</body>
</html>

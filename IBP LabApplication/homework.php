<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333333;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #555555;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>Student Registration Form</h1>
<form action="register.php" method="POST">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required><br><br>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label><br>

    <input type="radio" id="female" name="gender" value="Female" required>
    <label for="female">Female</label><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>


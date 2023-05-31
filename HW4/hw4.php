<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333333;
        }

        form {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 250px;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>Form Example</h1>

<!-- Form using GET method -->
<form action="target_get.html" method="get" target="_blank">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" value="Submit">
</form>

<!-- Form using POST method -->
<form action="target_post.html" method="post" target="_self">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>





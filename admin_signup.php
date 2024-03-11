<!DOCTYPE html>
<html>
<head>
    <title>Admin SignUp</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: lightgray;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px; /* Adjusted width */
            margin: 120px auto 0; /* Adjusted margin */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .link-button {
            background: none;
            border: none;
            color: #007bff;
            text-decoration: underline;
            font-size: 14px;
            cursor: pointer;
            transition: color 0.3s;
        }

        .link-button:hover {
            color: #0056b3;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="admin_signed_up.php" method="post">
            <h2>Admin SignUp</h2>
            <input type="text" name="adminid" placeholder="Enter user ID" required><br>
            <input type="password" name="password" placeholder="Enter password" required><br>
            <input type="text" name="empid" placeholder="Enter emp ID" required><br>
            <input class="button" type="submit" value="Submit">
        </form> 
    </div>
</body>
</html>

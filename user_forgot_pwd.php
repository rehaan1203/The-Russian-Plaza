<!DOCTYPE html>
<html>
<head>
    <title>User Forgot Password</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #d9d9d9;
			display: flex;
			justify-content : center;
			align-items: center;
        }

        .container {
            display: flex;
            justify-content : center;
            align-items: center;
            width: 30%; /* Adjusted width */
            margin: 20px auto; /* Adjusted margin */
			margin-top: 100px;
            padding: 30px;
            background-color: #f2f2f2;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Added box-shadow */
            border-radius: 10px; /* Added border-radius */
        }

        .container h2 {
            font-size: 30px;
            color: #009999;
            margin-bottom: 20px;
        }

        .container a {
            display: inline-block;
            background-color: #009999;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 20px;
            transition: background-color 0.3s;
            border-radius: 5px; /* Added border-radius */
        }

        .container a:hover {
            background-color: #007f7f;
        }

        .input {
            font-size: 20px;
            padding: 10px;
            margin: 10px 0;
            width: calc(100% - 20px);
            opacity: 0.8;
            border-radius: 5px; /* Added border-radius */
            border: 1px solid #ccc; /* Added border */
        }

        .button {
            background: none;
            border: none;
            color: #007bff;
            text-decoration: underline;
            font-size: 14px;
            cursor: pointer;
            transition: color 0.3s;
        }

        .button:hover {
            color: #0056b;
        }
    </style>
</head>
<body>
    <?php $email = 0;
        $dob = 0;
        ?>
        <br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <table>
            <tr>
                <td colspan="2"><p style="font-size: 25px; color: #094198;"><b>User Forgot Password</b></p></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <form action="user_forgot_pwd1.php" method="post">
            <tr>
                <td><input class="input" type="email" name="email" placeholder="Enter email address" required></td>
            </tr>
            <tr><td><br></td>
            </tr>
            <tr>
                <td> <input class="input" type="date" name="dob" required></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td colspan="2"><input class="button" type="submit" value="Recover Password"></td>
            </tr>
            </form>
        </table>
    </div>
</body>
</html>

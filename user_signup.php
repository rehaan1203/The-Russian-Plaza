<!DOCTYPE html>
<html>
<head>
    <title>New User SignUp</title>
    <style>
        body {
            background-color: #d9d9d9;
            background-position: right top;
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 40%; /* Adjusted width */
            margin: 60px auto; /* Adjusted margin */
            text-align: center;
            position: relative;
            padding: 30px;
            background-color: #f2f2f2;
            border-radius: 20px;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="number"],
        input[type="password"],
        input[type="email"],
        input[type="date"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            font-size: 18px;
            border: none; /* Removed border */
            border-radius: 5px;
            outline: none;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #094198; /* Modified color */
            border: none; /* Removed border */
            border-radius: 10px;
            box-shadow: 2px 2px #a6a6a6;
            color: white;
            padding: 14px 20px;
            font-size: 24px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #e6b800;
        }

        h1 {
            font-size: 35px;
            font-family: 'Times New Roman', serif;
            color: #094198; /* Modified color */
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        td {
            text-align: left;
            padding-left: 20px;
        }

        .input {
            font-size: 18px;
            text-align: center;
            opacity: 0.5;
        }
        
        .button{background-color:#007bff;
            color:#007bff;border:none;
            border-radius:5px;
            padding:12px 20px;
            font-size:16px;
            cursor:pointer;
            transition:background-color 0.3s}

            .button:hover{background-color:#0056b3}
    </style>
</head>
<body>
    <div class="container">
        <h1>New User SignUp</h1>
        <form action="user_signed_up.php" method="post">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input class="input" type="text" name="name" placeholder="Enter Name" required></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input class="input" type="number" name="phone" placeholder="Enter Number" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input class="input" type="password" name="password" placeholder="Enter Password" required></td>
                </tr>
                <tr>
                    <td>Email ID:</td>
                    <td><input class="input" type="email" name="email" placeholder="Enter Email" required></td>
                </tr>
                <tr>
                    <td>ID Proof:</td>
                    <td><input class="input" type="text" name="idproof" placeholder="Enter ID Proof" required></td>
                </tr>
                <tr>
                    <td>Date of birth:</td>
                    <td><input class="input" type="date" name="dob" value="2000-01-01" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Submit" class="button"></td>
                </tr>
            </table>
        </form>
    </div> 
</body>
</html>

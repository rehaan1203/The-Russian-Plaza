<!DOCTYPE html>
<html>
<head>
    <title>Admin Forgot Password</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #d9d9d9;
    }

    .container {
		display: flex;
		justify-content : center;
		align-items: center;
        width: 30%; /* Adjusted width */
        margin: 100px auto; /* Adjusted margin */
        padding: 30px;
        border-radius: 20px; 
        background-color: #f2f2f2;
        text-align: center;
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
        border-radius: 5px;
        font-size: 20px;
        transition: background-color 0.3s;
    }

    .container a:hover {
        background-color: #007f7f;
    }
	.input {
            font-size: 20px; /* Adjusted font size */
            padding: 10px; /* Adjusted padding */
            margin: 10px 0; /* Adjusted margin */
            border: 1px solid #ccc;
            border-radius: 5px;
            width: calc(100% - 20px);
            opacity: 0.8; /* Adjusted opacity */
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

</style>
<body>
    <div class="container">
        <form method="post" action="admin_forgot_pwd1.php">
            <table>
                <tr>
                        <td colspan="2"><p style="font-size: 25px; font-family: 'Times New Roman', serif; color: #333;"><b>Admin Forgot Password</b></p></td>
                </tr>
                <tr>
                    <td><input class="input" type="text" name="adminid" placeholder="Enter user ID" required></td>
                </tr>
                <tr>
                    <td><input class="input" type="text" name="empid" placeholder="Enter emp ID" required></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td colspan="2"><input class="button" type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Confirm Room Book</title>
    <style>
        body {
            margin: 0;
            background: #f2f2f2;
            font-family: Arial, sans-serif;
        }
    table {
        font-size: 18px;
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
        p {
            font-size: 24px;
            margin-top: 20px;
            text-align: center;
        }
        #td1 {
            background-color: #203D70;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 36px;
        }

        ul {
            list-style-type: none;
            margin: 70px 0 0; 
            padding: 0;
            width: 22%;
            font-size: 24px;
            background-color: rgba(9, 41, 98, 0.9);
            text-decoration: none;
            position: fixed;
            height: 100%;
            overflow: auto;
            z-index: 1000; /* Optional: To ensure it's above other elements */
        }
        li {
            color: white;
        }
        a {
            display: block;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
        }
        a:active,
        a:hover {
            background-color: #e6b800;
            text-decoration: underline;
        }
        .content {
            margin-left: 25%;
            padding: 20px;
            height: 1000px;
            text-align: center;
        }
        .message {
            background-color: #fff;
            margin-top: 150px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
        .next-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #e6b800;
            color: black;
            text-decoration: none;
            border: 2px solid #e6b800;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .next-link:hover {
            background-color: #ffcc00;
            color: black;
        }
        .sticky-element { 
            width: 40%;
            margin: 0 auto;
            text-align: center;
            position: fixed;
            z-index: 1000;
            background-color: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(10px); 
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
        }
    </style>
</head>
<body>
    <?php
        $conn = new mysqli("localhost","root","", "iwp");
        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }
        $sql = "SELECT * from temp_session";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_row($result); ?>
    <table style="width: 100%;" class="sticky-element">
        <tr>
            <td id="td1">THE <span style="color: #e6b800;">RUSSIAN</span> PLAZA</td>
            <td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
        </tr>
    </table>
    <ul>
        <li><a href="user_view.php">My Info</a></li>
        <li><a href="bookroom.php">Book A Room</a></li>
        <li><a href="user_room_status.php">Show Booking Status</a></li>
        <li><a href="user_payment.php">Payment</a></li>
        <li><a href="user_booking_history.php">Booking History</a></li>
        <li><a href="index.php">Logout</a></li>
    </ul>
    <div class="content">
        <div class="message">
            <p>Room Booking Request is submitted successfully!</p>
            <p>Now wait for the Admin to confirm the request.</p>
            <p>Click Next to get redirected to home page.</p>
            <a href="user_view.php" class="next-link">Next</a>
        </div>
    </div>
</body>
</html>

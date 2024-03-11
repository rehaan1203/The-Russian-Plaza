<!DOCTYPE html>
<html>
<head>
    <title>User Payment</title>
    <style>
        body {
            margin: 0;
            background: #f2f2f2;
        }
        table {
            font-size: 18px;
            width: 100%;
        }
        td, th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .basic_box {
            border: 1px solid #ccc;
            border-radius: 15px;
            margin: auto;
            width: 80%;
            padding: 20px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19);
            background-color: #fff;
            margin-top: 50px;
        }
        .payment-form {
            margin-top: 20px;
            text-align: center;
        }
        .payment-form input[type="number"] {
            width: 200px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }
        .payment-form button {
            padding: 10px 20px;
            background-color: #e6b800;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }
        .payment-form button:hover {
            background-color: #d39e00;
        }
        .basic_box {
            border: 1px solid #ccc;
            border-radius: 15px;
            margin: auto;
            margin-top: 90px;
            width: 600px;
            padding: 50px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19);
        }
        .td1 {
            background-color: rgba(9, 41, 98, 0.9);
            color: white;
            border: 10px;
            margin-top: -10px;
            padding: 10px;
            text-align: center;
        }
        
        ul {
            list-style-type: none;
            margin: 80px 0 0; 
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
        li a {
            display: block;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
        }
        li a:visited {
            background-color: #e6b800;
            color: white;
            text-decoration: underline;
        }
        li a:active {
            background-color: #e6b800;
            color: white;
            text-decoration: underline;
        }
        li a:hover {
            background-color: #e6b800;
            color: white;
            text-decoration: underline;
        }
        .sticky-element { 
            width: 100%;
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
    $conn = new mysqli("localhost", "root", "", "iwp");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * from temp_session";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
?>
<table style="width: 100%;" class="sticky-element">
    <tr>
        <td class="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">RUSSIAN</p> PLAZA</td>
        <td class="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
    </tr>
</table>
<ul >
    <li><a href="user_view.php">My Info</a></li>
    <li><a href="bookroom.php">Book A Room</a></li>
    <li><a href="user_room_status.php">Show Booking Status</a></li>
    <li><a href="user_payment.php">Payment</a></li>
    <li><a href="user_booking_history.php">Booking History</a></li>
    <li><a href="index.php">Logout</a></li>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;" class="conte">
    <p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
    <div class="basic_box">
        <table class="content">
            <tr>
                <td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Payment</b></p></td>
            </tr>
            <tr >
                <th>Booking ID</th>
                <th>Name</th>
                <th>Room Type</th>
                <th>Check-in Date</th>
                <th>Check-out Date</th>
                <th>Price</th>
            </tr>
            <?php
                $conn = new mysqli("localhost", "root", "", "iwp");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql1 = "SELECT * from confirmed_booking";
                if ($result = mysqli_query($conn, $sql1)) {
                    while ($row = mysqli_fetch_row($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row[14]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                            <td><?php echo $row[13]; ?></td>
                        </tr>
                        <?php
                    }
                    mysqli_free_result($result);
                }
            ?>
        </table>
        <br><br>
        <table>
            <tr>
                <td colspan="1">Enter Booking ID:</td>
                <td colspan="2">
                    <form action="payment.php" method="post">
                        <input type="number" name="book_id">
                </td>
                <td style="text-align: center;"><button type="submit">Pay Now</button></td>
            </tr>
        </table>
        <br>
    </div>
</div>
</body>
</html>

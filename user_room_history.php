<!DOCTYPE html>
<html>
<head>
    <title>User Room Status</title>
    <style>
        body {
            margin: 0;
            background: #f2f2f2;
        }

        table {
            font-size: 22px;
            margin-top: 20px;
        }

        .basic_box {
            border: 1px solid #ccc;
            border-radius: 15px;
            margin: auto;
            width: 600px;
            padding: 50px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19);
            background-color: #fff;
        }

        #td1 {
            background-color: rgba(9, 41, 98, 0.9);
            color: white;
            border: 10px;
            margin-top: -10px;
            padding: 10px;
            text-align: center;
        }

        td {
            text-align: center;
            padding: 10px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 22%;
            font-size: 24px;
            background-color: rgba(9, 41, 98, 0.9);
            text-decoration: none;
            position: fixed;
            height: 100%;
            overflow: auto;
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
    </style>
</head>
<body>
    <?php
        $conn = new mysqli("localhost", "root", "", "iwp");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $bid = $_POST["book_id"];
        $sql = "SELECT * FROM booked_hist WHERE book_id='$bid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($result);
    ?>
    <table style="width: 100%;">
        <tr>
            <td id="td1">THE <span style="color: #e6b800;">RUSSIAN</span> PLAZA</td>
            <td id="td1">Hello, <?php echo $row[2]; ?></td>
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
    <div style="margin-left: 25%; padding: 1px 16px;">
        <table class="basic_box">
            <tr>
                <th colspan="2">Booking History</th>
            </tr>
            <tr>
                <td>Booking ID:</td>
                <td><?php echo $row[14]; ?></td>
            </tr>
            <!-- Add more rows for other booking details -->
            <!-- Example:
            <tr>
                <td>Name:</td>
                <td><?php echo $row[1]; ?></td>
            </tr>
            -->
        </table>
    </div>
</body>
</html>

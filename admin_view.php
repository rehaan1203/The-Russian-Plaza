<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<style>
    body {
      margin: 0;
      background: #f2f2f2;
    }
    table {
        font-size: 22px;
    }
    td {
        text-align: center;
    }
    #td1
    {
        background-color: rgba(09,41,98,0.9);
        color: white;
        border: 10px;
        margin-top: -10px;
        padding: 10px;
    }
    .basic_box {
        border: 1px solid #ccc;
        border-radius: 15px;
        margin: auto;
        margin-top: 150px;
        width: 600px;
        padding: 50px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19);
    }
    th {
        font-weight: bold;
        padding-left: 15px;
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

    li a.active {
        background-color: #e6b800;
        color: white;
    }

    li a:hover:not(.active) {
        background-color: #e6b800;
        color: white;
        text-decoration: underline;
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
<body>
    <table style="width: 100%;" class="sticky-element">
        <tr>
            <td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">RUSSIAN</p> PLAZA</td>
        </tr>
    </table>
    <ul>
        <li><a href="admin_view.php" class="active">Rooms Info</a></li>
        <li><a href="add_room_admin.php">Add Room</a></li>
        <li><a href="remove_room_admin.php">Remove Rooms</a></li>
        <li><a href="admin_room_status.php">Booking Requests</a></li>
        <li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
        <li><a href="booking_history.php">Booking History</a></li>
        <li><a href="index.php">Logout</a></li>
    </ul>
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        <p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
        <?php
            $conn = new mysqli("localhost","root","", "iwp");
            if($conn->connect_error)
            {
                die("Connection failed: ".$conn->connect_error);
            }
            $sql = "SELECT * from rooms_count";
            $result=mysqli_query($conn,$sql); ?>
            <table class="basic_box">
                <tr>
                    <th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Rooms Info</p></th>
                </tr>
                <tr>
                    <th>Room Type</th>
                    <th>Available Rooms</th>
                    <th>Occupied Rooms</th>
                    <th>Price</th>
                </tr>
            <?php 
            while ($row=mysqli_fetch_row($result))
            {   ?>  
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                </tr>
            <?php } ?>
            </table>         
    </div>
</body>
</html>

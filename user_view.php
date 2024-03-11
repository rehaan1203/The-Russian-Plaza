<!DOCTYPE html>
<html>
<head>
    <title>User Signed In</title>
</head>
<style>
    body {
      margin: 0;
      background: #f2f2f2;
    }

    table {
    font-size: 18px;
    border-collapse: collapse;
    width: 100%;
    margin: auto;
    border: 2px solid #ddd;
    }
    th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    }
    th {
    background-color: #f2f2f2;
    }
    #td1 {
        background-color: rgba(09,41,98,0.9);
        color: white;
        border: 10px;
        margin-top: -10px;
        padding: 10px;
        text-align: center;
        font-size: 48px;
        position: sticky;
        z-index: 1;
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
    .basic_box {
        border: 1px solid #ccc;
        border-radius: 15px;
        margin: auto;
        margin-top: 150px;
        width: 600px;
        padding: 50px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19);
    }
    .decor {
        font-family: Times New Roman;
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
    <table class="sticky-element">
        <tr>
            <td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">RUSSIAN</p> PLAZA</td>
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
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        <p style="margin-left: 10%; margin-top: 5%; font-size: 24px;"></p>
            <table class="basic_box decor">
                <tr>
                    <td colspan="2"><p style="font-size: 38px; text-align: center;"><b>Welcome!</b></p></td>
                </tr>
                <tr>
                    <td><b>Name: </b></td>
                    <td><?php echo $row[2] ?><br></td>
                </tr>
                <tr>
                    <td><b>Phone number: </b></td>
                    <td><?php echo $row[0] ?><br></td>
                </tr>
                <tr>
                    <td><b>Email address: </b></td>
                    <td><?php echo $row[3] ?><br></td>
                </tr>
                <tr>
                    <td><b>Date of birth: </b></td>
                    <td><?php echo $row[5] ?><br></td>
                </tr>
                <tr>
                    <td><b>ID Proof: </b></td>
                    <td><?php echo $row[4] ?><br></td>
                </tr>
                <tr><td></td></tr><tr><td></td></tr>
            </table>
    </div>
</body>
</html>

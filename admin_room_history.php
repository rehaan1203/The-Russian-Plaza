<!DOCTYPE html>
<html>
<head>
	<title>Admin Room History</title>
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
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
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
<script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script>
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
	<div style="position: absolute; left: 25%; top: 100px; width: 75%; padding: 1px 16px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$bid = $_POST["book_id"];
			$sql = "SELECT * FROM booked_hist WHERE book_id='$bid'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
		?>
			<table class="basic_box">
				<tr>
					<th colspan="2">Booking History</th>
				</tr>
				<tr>
					<td>Booking ID: </td>
					<td><?php echo $row[14]; ?></td>	
				</tr>
				<tr>
					<td>Name: </td>
					<td><?php echo $row[1]; ?></td>	
				</tr>
				<tr>
					<td>Room Type: </td>
					<td><?php echo $row[3]; ?></td>	
				</tr>
				<tr>
					<td>Check In Date: </td>
					<td><?php echo $row[4]; ?></td>	
				</tr>
				<tr>
					<td>Check Out Date: </td>
					<td><?php echo $row[5]; ?></td>	
				</tr>
				<tr>
					<td>Days of Stay: </td>
					<td><?php echo $row[6]; ?></td>	
				</tr>
				<tr>
					<td>Total Bill Amount: </td>
					<td><?php echo $row[13]; ?></td>	
				</tr>
				<tr>
					<td>AC: </td>
					<td><?php if(strcmp($row[7], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Breakfast: </td>
					<td><?php if(strcmp($row[8], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Lunch: </td>
					<td><?php if(strcmp($row[9], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Snacks: </td>
					<td><?php if(strcmp($row[10], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Dinner: </td>
					<td><?php if(strcmp($row[11], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Swimming: </td>
					<td><?php if(strcmp($row[12], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td colspan="2"><a href="booking_history.php">Back</a></td>
				</tr>
			</table>
		</div>
	</body>
</html>
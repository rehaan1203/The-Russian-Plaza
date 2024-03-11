<!DOCTYPE html>
<html>
<head>
	<title>Admin Room Added</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	p {
		font-size: 24px;
	}
	#td1
	{
		background-color: #203D70;
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
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
	a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	.ok{
	
	  	display: block;
	  	color: #203D70;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	.ok:hover{
	display: block;
	color: #203D70;
	padding: 8px 16px;
	text-decoration: none;
}
	a:active {
	  	background-color: #e6b800;
	  	color: #203D70;
	  	text-decoration: underline;		
	}
	a:hover {
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
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; font-size: 48px; display: inline;">RUSSIAN</p> PLAZA</td>
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
			<table class="basic_box">
				<tr>
					<td>Admin Room added successfully</td>
				</tr>
				<tr>
					<td ><a class="ok" href="admin_view.php">Click here to get redirected.</a></td>
				</tr>
			</table>
		</div>
	</body>
</html>
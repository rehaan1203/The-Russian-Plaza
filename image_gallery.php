<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
	<style>
		body {
			background: #f2f2f2;
			margin: 0;
			font-family: Arial, sans-serif;
		}
		.header {
			background-color: #094198;
			color: white;
			text-align: center;
			padding: 20px 0;
		}
		.navbar {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #094198;
		}
		.navbar li {
			float: left;
		}
		.navbar li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		.navbar li a:hover {
			background-color: #8c8c8c;
		}
		.container {
			margin: 20px;
			padding: 20px;
			background-color: #ffffff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.gallery {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
		}
		.gallery img {
			width: 30%;
			margin: 10px;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
		}
		.room-container {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			text-align: center;
		}
		.room {
			width: 30%;
			margin: 20px 0;
			padding: 20px;
			background-color: #ffffff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.footer {
			background-color: #094198;
			color: white;
			text-align: center;
			padding: 20px 0;
			position: fixed;
			bottom: 0;
			left: 0;
			width: 100%;
		}
		.footer p {
			margin: 0;
		}
	</style>
</head>
<body>
	<div class="header">
		<h1>THE <span style="color: #e6b800;">RUSSIAN</span> PLAZA</h1>
	</div>
	<ul class="navbar">
		<li><a href="index.php">HOME</a></li>
		<li><a href="admin_login.php">ADMIN LOGIN</a></li>
		<li><a href="user_login.php">USER LOGIN</a></li>
		<li><a href="#rooms_and_rates">ROOM GALLERY</a></li>
		<li><a href="image_gallery.php">IMAGE GALLERY</a></li>
		<li style="float: right;"><a href="#contact">Contact Details</a></li>
	</ul>
	<div class="container">
		<h2 style="text-align: center;">IMAGE GALLERY</h2>
		<div class="gallery">
			<img src="images/1.jpg" alt="Room 1">
			<img src="images/2.jpg" alt="Room 2">
			<img src="images/3.jpg" alt="Room 3">
			<img src="images/A1.jpg" alt="Room 4">
			<img src="images/A2.jpg" alt="Room 5">
			<img src="images/A3.jpg" alt="Room 6">
			<img src="images/A4.jpg" alt="Room 7">
			<img src="images/A5.jpg" alt="Room 8">
			<img src="images/A6.jpg" alt="Room 9">
		</div>
		<h2 id="rooms_and_rates" style="text-align: center;">OUR ROOMS</h2>
		<div class="room-container">
			<div class="room">
				<img src="images/1.jpg" alt="Deluxe Room">
				<h3>Deluxe Room</h3>
			</div>
			<div class="room">
				<img src="images/2.jpg" alt="Executive Room">
				<h3>Executive Room</h3>
			</div>
			<div class="room">
				<img src="images/3.jpg" alt="Standard Room">
				<h3>Standard Room</h3>
			</div>
		</div>
	</div>
	<div id="contact" class="footer">
		<p>Contact Us!</p>
		<p>Developers: VV, PKK</p>
	</div>
</body>
</html>

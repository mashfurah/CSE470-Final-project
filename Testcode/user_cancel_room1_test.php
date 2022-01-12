<!DOCTYPE html>
<html>
<head>
	<title>Confirm Room Book</title>
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
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: #203D70;
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
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
	a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
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
	<table style="width: 100%;">
		<tr>
		<td id="td1" style="padding: 10px; font-size: 49px;">THE <p style="color: #e6b800; display: inline;">SEASKY</p> HOTEL</td>
			<td id="td1" style="font-size: 29px; text-align: centre;">WELCOME<?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
	<li><a href="user_view.php">My Information</a></li>
		<li><a href="bookroom.php">Room Booking</a></li>
		<li><a href="user_room_status.php">Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="index.php">Sign Out</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p>Room Booking has been cancelled successfully.<br></p>
		<P><br>Click Next to get redirected to home.</P>
		<a href="user_view.php" style="width: 10%; text-align: center; color: black; border: 3px solid #e6b800;">Next</a>
	</div>
</body>
</html>
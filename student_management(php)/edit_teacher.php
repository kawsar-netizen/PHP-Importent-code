<!DOCTYPE html>
<html>

<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header {
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}

		#left_side {
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
			margin-left: 20px;
			;
		}

		#right_side {
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: red;
			border: solid 1px black;
		}

		#top_span {
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}

		#td {
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 180px;
		}
	</style>
	<?php
	session_start();
	$name = "";
	$connection = mysqli_connect("localhost", "root", "" );
	$db = mysqli_select_db($connection, "sms");
	$id = $_GET['id'];
    $query = mysqli_query($connection,"SELECT * FROM teachers where t_id='$id'");
    $query_run = mysqli_fetch_array($query);
	?>
</head>

<body>
	<div id="header"><br>
		<center>Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: <?php echo $_SESSION['name']; ?>
			<a href="logout.php">Logout</a>
		</center>
	</div>
	<span id="top_span">
		<marquee>Note:- This portal is open till 17 May 2022...Plz edit your information, if wrong.</marquee>
	</span>
	<div id="left_side">

	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<!-- #Code for edit student details---Start-->
			<form action="edit_teacher_update.php" method="post">
			<input type="hidden" name="t_id" value="<?php echo $query_run['t_id']?>">
					<table>
						<tr>
							<td>
								<b>Name</b>
							</td>
							<td>
								<input type="text" name="name" value="<?php echo $query_run['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile</b>
							</td>
							<td>
								<input type="text" name="mobile" value="<?php echo $query_run['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Courses</b>
							</td>
							<td>
								<input type="text" name="courses" value="<?php echo $query_run['courses']?>">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Update Teacher">
							</td>
						</tr>
					</table>
				</form>

		</div>
	</div>
</body>

</html>
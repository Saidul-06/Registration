<?php
include_once("config.php");
include_once("function.php");

check_login_user();

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE HTML>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container" style="margin-top:20px;">
		
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Email</th>
					<th>Department</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
				while ($res = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td class='bg-danger'>" . $res['name'] . "</td>";
					echo "<td>" . $res['age'] . "</td>";
					echo "<td>" . $res['email'] . "</td>";
					echo "<td>" . $res['dept'] . "</td>";
					
				}
				?>
			</tbody>
		</table>
		<a href="logout.php" class="btn btn-info" role="button" style="float:right;">Log Out</a>
		<a href="add.php" class="btn btn-info" role="button" style="float:right;">Add New</a>

	</div>
</body>

</html>
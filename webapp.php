<?php
$servername = "sql2.njit.edu";
$username = "wwg2";
$password = "JF6UOlD8";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

if (isset($_POST['submit'])) {
	$task = $_POST['task'];
	
	mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
	header('location: webapp.php');
} 
?>




?>

<html>
<head>
	<title> IS218 To do list app </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="heading">
		<h2> To do list application </h2>
	</div>

	<form method="POST" action="webapp.php">
		<input type="text" name="task" class="task_input"> 
		<button type="submit" class="add_btn" name="submit"> Add Task
		</button>
	</form>

	<table>
		<thead>
			<tr>
				<th> # </th>
				<th> Task </th> 
				<th> Action </th>
			</tr>
		</thead>
		<tbody>
		

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td class="task"> <?php echo $row['task']; ?> </td>
				<td class= "delete">
					<a href="#">x</a> 
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>


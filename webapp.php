<?php
class Database {
	protected static $sql;
	private static $dsn = 'mysql:host=sql1.njit.edu;dbname=snh7';
	private static $username = "snh7";
	private static $password = "urku3NyPq";
		//PDO object is returned
		public function connect() {
			if(!isset(self::$sql)) {
				try {
					self::$sql = new PDO(self::$dsn, self::$username, self::$password);
				} catch (PDOException $e) {
					echo $e->getMessage();
					exit();
				}
			}
			return self::$sql;
		}

 //Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
//echo "Connected successfully";

if (isset($_POST['submit'])) {
	$task = $_POST['task'];
	
	mysqli_query('wwg2', "INSERT INTO todos (task) VALUES ('$task')");
	header('location: webapp.php');
} 




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


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
		<button type="submit" class="task_btn" name="submit"> Add Task
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
				<td>1</td>
				<td class="task"> first task </td>
				<td class= "delete">
					<a href="#">x</a> 
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html


<html>
<head>
	<title> IS218 To do list app </title>
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
				<th> N </th>
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


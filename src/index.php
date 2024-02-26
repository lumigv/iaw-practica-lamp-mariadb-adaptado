<?php
// including the database connection file
include_once("config.php");

// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Homepage</title>
</head>

<body>
<div>
	<header>
		<a href="/">
			<img src="images/code-solid.svg" width="40" height="32">
			<span>Company name</span>
		</a>
	</header>

	<main>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="add.html">Add</a></li>
	</ul>
	<br/>
	
	<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Surname1</th>
			<th>Surname2</th>
			<th>Age</th>
			<th>Email</th>
			<th>Update</th>
		</tr>
	</thead>
	<tbdody>

	<?php
	while($row = mysqli_fetch_array($result)) {
		echo "<tr>\n";
		echo "<td>".$row['name']."</td>\n";
		echo "<td>".$row['surname1']."</td>\n";
		echo "<td>".$row['surname2']."</td>\n";
		echo "<td>".$row['age']."</td>\n";
		echo "<td>".$row['email']."</td>\n";
		echo "<td>";
		echo "<a href=\"edit.php?id=$row[id]\">Edit</a>\n";
		echo "<a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" >Delete</a></td>\n";
		echo "</td>";
		echo "</tr>\n";
	}

	mysqli_close($mysqli);
	?>
	
	</tbdody>
	</table>
	</main>

	<footer>
    Created by the IES Miguel Herrero team &copy; 2024
  	</footer>
</div>
</body>
</html>
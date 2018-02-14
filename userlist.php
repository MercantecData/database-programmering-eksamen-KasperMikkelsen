<?php
	$conn = mysqli_connect("localhost", "root", "", "Databaseexam");
	$sql = "SELECT id, username FROM users";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>

</head>
<body>
	<h1>Users:</h1>
	<?php 
	 while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["username"]. "   <a href='?'>delete</a>". "<br>"	;
    }
	?>
</body>
</html>

<!--
Then the admin logs on he/she can see a list of all the users in the database
but are not able to delete them
-->
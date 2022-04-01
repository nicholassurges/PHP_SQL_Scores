<!doctype html>
<html>
<head>
	<title>Assignment 2</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<main>
	<h1>Assigment 2</h1>
	<form action="process.php" method="POST">
	
	<div id="data">
		<label>First Name:</label><input type="text" name="first_name" placeholder ="Enter your first name." required><br>
		
		<label>Last Name:</label><input type="text" name="last_name" placeholder ="Enter your last name."required><br>
		
		<label>Score 1:</label><input type="number" name="score_1" placeholder ="Enter Score 1" required><br>
		
		<label>Score 2:</label><input type="number" name="score_2" placeholder =" Enter Score 2" required><br>
		
		<label>Score 3:</label><input type="number" name="score_3" placeholder ="Enter Score 3" required><br>
		</div>
		
		<div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>
	</form>
</main>
</body>
</html>
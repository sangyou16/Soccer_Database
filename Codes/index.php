<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Title </title>
	<style>
.myDiv {
	border: 5px outset blue;
	background-color: lightblue;
}
</style>
</head>
<body>
<div class = "myDiv">
<h1>Please Type in your Full Name~</h1>

<form action="./home.php" method="POST">
<fieldset>
	<legend><label for="username">Name:</label><br></legend>
	<input type ="text" id="username" name="username" value=""><br>
	
	<input type="submit" value="Let's Go!">
</fieldset>
</form>	
	
</div>
</body>
</html>
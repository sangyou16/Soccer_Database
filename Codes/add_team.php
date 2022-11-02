<?php
include "header.php";
include "header2.php";
?>
<style>
.myDiv {
	background-color: lightblue;
}
.center {
	text-align: center;
}
.container {
    width: 1000px;
    margin: 0 auto;
}
.L {
	text-align: left;
}
.R {
	text-align: right;
}
.myDiv2 {
  border: 5px outset purple;
}
</style>

<form action = "./inserting_team.php" method = "POST">
<h2 class = center>Add a team </h2>
<div class = 'center'> 

		Team: <input type="text" id="team" name="team"/> <br>
<label for = "league"> League: </label>
	<select name = "league"> <br>
		<option value ="EPL">EPL</option>
		<option value ="Bundesliga">Bundesliga</option>
		<option value ="LaLiga">LaLiga</option>
		<option value ="Ligue 1">Ligue 1</option>
		<option value ="Seria A">Seria A</option>
		</select>
<br>
City: <input type="text" id="city" name="city"/> <br>
Stadium: <input type="text" id="stadium" name="stadium"/> <br>
Manager: <input type="text" id="manager" name="manager"/> <input type = "submit" name = "send" value = "Add">
</form>
</div> 
<?php
include "header.php";
include "header2.php";
?><style>
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

<form action = "./inserting_player.php" method = "POST">
<h2 class = center>Add a player </h2>
<div class = 'center'> 
Player Name: <input type="text" id="PlayerName" name="PlayerName"/> <br>
Team: <input type="text" id="team" name="team"/> <br>
<label for = "position"> Position: </label>
	<select name = "position"> <br>
		<option value ="Forward">Forward</option>
		<option value ="Midfielder">Midfielder</option>
		<option value ="Defender">Defender</option>
		<option value ="Goalkeeper">Goalkeeper</option>
		</select> <br>
Country: <input type="text" id="country" name="country"/> <br>	
<label for = "foot"> Foot: </label>
	<select name = "foot"> <br>
		<option value ="Left">Left</option>
		<option value ="Right">Right</option>
		<option value ="Both">Both</option>
		</select>
<input type = "submit" name = "send" value = "Add"> 		
</form>
</div>
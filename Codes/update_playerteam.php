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

<form action = "./modifying_playerteam.php" method = "POST">
<h2 class = center> Update a Player's Team </h2>
<div class = center>

Player Name: <input type="text" id="PlayerName" name="PlayerName"/> <br>
Team (changing to): <input type="text" id="team" name="team"/> <br>

<input type = "submit" name = "send" value = "Update"> 
</form>
</div>
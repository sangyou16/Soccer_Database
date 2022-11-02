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

<form action = "./modifying_teammanager.php" method = "POST">
<h2 class = center> Update a Team's manager </h2>
<div class = center>

Team Name: <input type="text" id="team" name="team"/> <br>
Manager (changing to): <input type="text" id="manager" name="manager"/> <br>

<input type = "submit" name = "send" value = "Update"> 
</form>
</div>
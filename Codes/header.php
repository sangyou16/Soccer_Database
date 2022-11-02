<!DOCTYPE html>

<head>
    <title>Soccer DB</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
.pull-left {
    float: left;
}

.pull-right {
    float: right;
}
.myDiv2 {
  border: 5px outset purple;
}
.myDiv3 {
  border: 5px outset blue;
}
</style>
</head>
<body>
    <form action="result_player.php" method="post"> 
    	<div class= 'myDiv'>
        <div class='container'>
            <a class='pull-left myDiv2' href="index.php">Change Name</a>
            <ul class='pull-right myDiv3'>
                <li>
                    <input type="text" name="search_keyword" placeholder="Search for Player then Enter">
                </li>         
                <li><a href='result_player.php'>List of Players</a></li>
                <li><a href='add_player.php'>Add a Player</a></li>
                <li><a href='delete_player.php'>Delete a Player</a></li>  
                <li><a href='update_playerteam.php'>Update a Player's Team</a></li>
            </ul>
        </div>
        </div>
</form>
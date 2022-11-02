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
    <form action="result_team.php" method="post"> 	
    <div class='navbar fixed'>
        <div class='container'>
            <ul class='pull-right myDiv3'>
                <li>
                    <input type="text" name="search_keyword" placeholder="Search for Team then Enter">
                </li>         
                <li><a href='result_team.php'>List of Teams</a></li>
                <li><a href='add_team.php'>Add a Team</a></li>
                <li><a href='delete_team.php'>Delete a Team</a></li>
                <li><a href='update_teammanager.php'>Update a Team's manager</a></li>
            </ul>
        </div>
    </div>
</form>

<!DOCTYPE html>
<?php
include_once "header.php";
include_once "header2.php";
include_once "config.php";    //데이터베이스 연결 설정파일
include_once "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);
$text = $_POST['username'];
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
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
</head>
<body>
<div class = "myDiv">
	<div class = "center"> <h2>Hello, Soccer Fan: <?php echo $text ?>  </h2> </div> 
	<br><br>
	<br><br>
	<form action="/search_league" method ="POST">
		<div class = "center"><img src="https://i.insider.com/5395ea22ecad04b77995212d?width=1200&format=jpeg" alt="Soccer" width="800" height="400">
		</div>
		</form>
		</div>
		</body>
		</html>
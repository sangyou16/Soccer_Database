<?php

include "config.php";    //데이터베이스 연결 설정파일
include_once "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);
 mysqli_query("set autocommit = 0", $conn);
 mysqli_query("set session transaction isolation level serializable", $conn);
 mysqli_query("begin", $conn);
 
 
$player_name = $_POST['PlayerName'];
$team= $_POST['team'];
$position = $_POST['position'];
$country = $_POST['country'];
$foot = $_POST['foot'];

$ret = mysqli_query($conn, "INSERT INTO player VALUES ('$player_name', '$team', '$position','$country','$foot')");
if(!$ret)
{
	mysqli_query("rollback", $conn);      
    msg('Query Error : '.mysqli_error($conn));
    echo "<meta http-equiv='refresh' content='0;url=inserting_player.php'>";    
}
else
{
	mysqli_query("commit",$conn);    
    s_msg ('Successfully Inserted');
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

?>


<?php
include "config.php";    //데이터베이스 연결 설정파일
include_once "util.php";      //유틸 함수


$conn = dbconnect($host,$dbid,$dbpass,$dbname);
 mysqli_query("set autocommit = 0", $conn);
 mysqli_query("set session transaction isolation level serializable", $conn);
 mysqli_query("begin", $conn);


$player_name= $_GET['PlayerName'];
$team= $_GET['team'];
$position = $_GET['position'];
$country = $_GET['country'];
$foot = $_GET['foot'];

$ret = mysqli_query($conn, "DELETE FROM player WHERE name = '$player_name' AND team = '$team' AND position = '$position' AND country = '$country' AND foot = '$foot'");
if(!$ret)
{
    mysqli_query("rollback", $conn);
    msg('Query Error : '.mysqli_error($conn));
    echo "<meta http-equiv='refresh' content='0;url=deleting_player.php'>";
}
else
{
	mysqli_query("commit",$conn);
    s_msg ('Successfully Deleted');
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}

?>


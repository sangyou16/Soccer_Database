<?php
include "config.php";    //데이터베이스 연결 설정파일
include_once "util.php";      //유틸 함수


$conn = dbconnect($host,$dbid,$dbpass,$dbname);
 mysqli_query("set autocommit = 0", $conn);
 mysqli_query("set session transaction isolation level serializable", $conn);
 mysqli_query("begin", $conn);


$team= $_GET['team'];
$league = $_GET['league'];
$city = $_GET['city'];
$stadium = $_GET['stadium'];
$manager = $_GET['manager'];

$ret = mysqli_query($conn, "DELETE FROM team WHERE team_name = '$team' AND league = '$league' AND city = '$city' AND home_stadium = '$stadium' AND manager = '$manager'");
if(!$ret)
{
    mysqli_query("rollback", $conn);    
    msg('Query Error : '.mysqli_error($conn));
    echo "<meta http-equiv='refresh' content='0;url=deleting_team.php'>";    
}
else
{
	mysqli_query("commit",$conn);
    s_msg ('Successfully Deleted');
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}

?>


<?php
include "config.php";    //데이터베이스 연결 설정파일
include_once "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);
 mysqli_query("set autocommit = 0", $conn);
 mysqli_query("set session transaction isolation level serializable", $conn);
 mysqli_query("begin", $conn);


$team= $_POST['team'];
$league = $_POST['league'];
$city = $_POST['city'];
$stadium = $_POST['stadium'];
$manager = $_POST['manager'];

$ret = mysqli_query($conn, "INSERT INTO team VALUES ('$team', '$league', '$city','$stadium','$manager')");
if(!$ret)
{
	mysqli_query("rollback", $conn);    
    msg('Query Error : '.mysqli_error($conn));
    echo "<meta http-equiv='refresh' content='0;url=inserting_team.php'>";
}
else
{
	mysqli_query("commit",$conn);
    s_msg ('Successfully Inserted');
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

?>


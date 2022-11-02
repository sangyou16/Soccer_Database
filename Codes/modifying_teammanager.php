<?php
include "config.php";    //데이터베이스 연결 설정파일
include_once "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);
 mysqli_query("set autocommit = 0", $conn);
 mysqli_query("set session transaction isolation level serializable", $conn);
 mysqli_query("begin", $conn);

$manager= $_POST['manager'];
$team= $_POST['team'];

$ret = mysqli_query($conn, "UPDATE team SET manager = '$manager' WHERE team_name = '$team'");
if(!$ret)
{
	mysqli_query("rollback", $conn);
    msg('Query Error : '.mysqli_error($conn));
    echo "<meta http-equiv='refresh' content='0;url=modifying_teammanager.php'>";    
}
else
{
	mysqli_query("commit",$conn);	
    s_msg ('Successfully Modified');
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

?>


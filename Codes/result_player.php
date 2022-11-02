<?php
include "header.php";
include "header2.php";
include "config.php";    //데이터베이스 연결 설정파일
include_once "util.php";      //유틸 함수
?>


<div class = "container">
    <?
    $conn = dbconnect($host, $dbid, $dbpass, $dbname);
    $query = "SELECT * FROM player natural join manager";
	 if (array_key_exists("search_keyword", $_POST)) {  // array_key_exists() : Checks if the specified key exists in the array
        $search_keyword = mysqli_real_escape_string($conn, $_POST["search_keyword"]);
        $query =  $query . " where name like '%$search_keyword%'";
    }    
    $res = mysqli_query($conn, $query);
    if (!$res) {
         die('Query Error : ' . mysqli_error());
    }
    ?>
    <img src="https://img.etoday.co.kr/pto_db/2012/08/20120811054837_217027_600_603.jpg" alt="Soccer" width="200" height="200">
    <table table border = "1" allign = "center">
    	<thead>
			<h3>Result</h3>
		</thead>
		
		<thead>
        <tr>
        	<th>Team</th>
        	<th>Name</th>
        	<th>Position</th>
        	<th>Country</th>
        	<th>Foot</th>
        	<th>Manager</th>
        	<th>Formation</th>
		</tr>
		</thead>
		<tbody>
    <?
    while ($row = mysqli_fetch_array($res)) {
    	echo "<tr>";
        echo "<td>{$row['team']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['position']}</td>";
        echo "<td>{$row['country']}</td>";
        echo "<td>{$row['foot']}</td>";
        echo "<td>{$row['manager_name']}</td>";
        echo "<td>{$row['formation']}</td>";
        echo "</tr>";
        }
    ?>
    </tbody>
    </table>
</div>
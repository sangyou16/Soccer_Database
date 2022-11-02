<?php
include "header.php";
include "header2.php";
include "config.php";    //데이터베이스 연결 설정파일
include_once "util.php";      //유틸 함수
?>


<div class = "container">
    <?
    $conn = dbconnect($host, $dbid, $dbpass, $dbname);
    $query = "SELECT * FROM team natural join stadium";
	 if (array_key_exists("search_keyword", $_POST)) {  // array_key_exists() : Checks if the specified key exists in the array
        $search_keyword = mysqli_real_escape_string($conn, $_POST["search_keyword"]);
        $query =  $query . " where team_name like '%$search_keyword%'";
    }    
    $res = mysqli_query($conn, $query);
    if (!$res) {
         die('Query Error : ' . mysqli_error());
    }
    ?>
    <img src="https://fivethirtyeight.com/wp-content/uploads/2017/08/soccer-social_1024.jpg" alt="Soccer" width="200" height="100">
    <table table border = "1" allign = "center">
    	<thead>
			<h3>Result</h3>
		</thead>
		
		<thead>
        <tr>
        	<th>Home Stadium</th>        	
        	<th>Team Name</th>
        	<th>League</th>
        	<th>City</th>
        	<th>Manager</th>
        	<th>Capacity of Stadium</th>
        	<th>Height of Stadium(meters)</th>        	
		</tr>
		</thead>
		<tbody>
    <?
    while ($row = mysqli_fetch_array($res)) {
    	echo "<tr>";
    	echo "<td>{$row['home_stadium']}</td>";
        echo "<td>{$row['team_name']}</td>";
        echo "<td>{$row['league']}</td>";
        echo "<td>{$row['city']}</td>";
        echo "<td>{$row['manager']}</td>";
        echo "<td>{$row['capacity']}</td>";
        echo "<td>{$row['height_meters']}</td>";
        echo "</tr>";
        }
    ?>
    </tbody>
    </table>
</div>
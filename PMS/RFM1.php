<html>
<head>
	<title>Colgate</title>


</head>
<body>

<?php


	//匯入連接MYSQL的檔案
	require_once('db_connect.php');

	//取損益平衡值
	$sql_breakeven = "SELECT breakeven_value FROM product";
	$breakeven = $mysqli->query($sql_breakeven);
	while($row = $breakeven->fetch_assoc()){
		$breakeven_value = $row["breakeven_value"];
	}
	//echo $breakeven_value;


	//這裡是要做RFM表格
	echo "<br>" . "M--F--R" . "<br>";//RFM排列順序
	echo "<br>" . "小組 RFM代碼 損益平衡值(%) 實際回應率(%) 損益平衡指數" . "<br>";//欄位名稱
	echo "name phone response(%) frequency recency monetary_value" . "<br>";

	$sql_RFM1 = "SELECT * FROM (SELECT * FROM (SELECT * FROM customer ORDER BY avg_monetary DESC LIMIT 12) as table1 ORDER BY frequency DESC LIMIT 6) as table2 ORDER BY recency ASC";
	$RFM1 = $mysqli->query($sql_RFM1);
	$RFM11 = $mysqli->query($sql_RFM1);
	$nr = $RFM1->num_rows;

	$k = 0;

	if ($RFM1->num_rows > 0) {
    	$i = 0;
    	$res = 0;
    	$j = 0;
    	while($row = $RFM1->fetch_assoc()) {
    		$res += $row["response_percentage"];
			$avg_res = $res/($nr/2);
			$BEI = ($avg_res - $breakeven_value)/$breakeven_value;//損益平衡指數
			$i++;
		//	echo $row["cus_name"] . ", " . $row["response_percentage"] . ", "  . $row["avg_monetary"] . ", "   . $row["frequency"] . ", "   . $row["recency"] ."<br>";
			//echo $avg_res . "<br>";
			if($i%($nr/2) == 0){
				$j++;
				$k++;
				echo "<br>" . $k . ", " . "11" . $j . ", " . $breakeven_value . ", " . round($avg_res,3) . ", " . round($BEI,2)  . "<br>";
				$res = 0;
				for($i=0; $i<$nr/2; $i++){
					$row1 = $RFM11->fetch_assoc();
					echo $row1["cus_name"] . ", " . $row1["cus_phone"] . ", " . $row1["response_percentage"] . ", "  . $row1["avg_monetary"] . ", "   . $row1["frequency"] . ", "   . $row1["recency"] ."<br>";
				}

			}
    	}
	} else {
    	echo "0 results";
	}


	$sql_RFM2 = "SELECT * FROM (SELECT * FROM (SELECT * FROM customer ORDER BY avg_monetary DESC LIMIT 12) as table1 ORDER BY frequency DESC LIMIT 6,6) as table2 ORDER BY recency ASC";
	$RFM2 = $mysqli->query($sql_RFM2);
	$RFM21 = $mysqli->query($sql_RFM2);
	$nr = $RFM2->num_rows;

	if ($RFM2->num_rows > 0) {
    	$i = 0;
    	$res = 0;
    	$j = 0;

    	while($row = $RFM2->fetch_assoc()) {
    		$res += $row["response_percentage"];
			$avg_res = $res/($nr/2);
			$BEI = ($avg_res - $breakeven_value)/$breakeven_value;//損益平衡指數
			$i++;
		//	echo $row["cus_name"] . ", " . $row["response_percentage"] . ", "  . $row["avg_monetary"] . ", "   . $row["frequency"] . ", "   . $row["recency"] ."<br>";
			//echo $avg_res . "<br>";
			if($i%($nr/2) == 0){
				$j++;
				$k++;
				echo "<br>" . $k . ", " . "12" . $j . ", " . $breakeven_value . ", " . round($avg_res,3) . ", " . round($BEI,2)  . "<br>";
				$res = 0;
				for($i=0; $i<$nr/2; $i++){
					$row1 = $RFM21->fetch_assoc();
					echo $row1["cus_name"] . ", " . $row1["cus_phone"] . ", " . $row1["response_percentage"] . ", "  . $row1["avg_monetary"] . ", "   . $row1["frequency"] . ", "   . $row1["recency"] ."<br>";
				}

			}
    	}
	} else {
    	echo "0 results";
	}


	$sql_RFM3 = "SELECT * FROM (SELECT * FROM (SELECT * FROM customer ORDER BY avg_monetary DESC LIMIT 12,12) as table1 ORDER BY frequency DESC LIMIT 6) as table2 ORDER BY recency ASC";
	$RFM3 = $mysqli->query($sql_RFM3);
	$RFM31 = $mysqli->query($sql_RFM3);
	$nr = $RFM3->num_rows;

	if ($RFM3->num_rows > 0) {
    	$i = 0;
    	$res = 0;
    	$j = 0;

    	while($row = $RFM3->fetch_assoc()) {
    		$res += $row["response_percentage"];
			$avg_res = $res/($nr/2);
			$BEI = ($avg_res - $breakeven_value)/$breakeven_value;//損益平衡指數
			$i++;
		//	echo $row["cus_name"] . ", " . $row["response_percentage"] . ", "  . $row["avg_monetary"] . ", "   . $row["frequency"] . ", "   . $row["recency"] ."<br>";
			//echo $avg_res . "<br>";
			if($i%($nr/2) == 0){
				$j++;
				$k++;
				echo "<br>" . $k . ", " . "21" . $j . ", " . $breakeven_value . ", " . round($avg_res,3) . ", " . round($BEI,2)  . "<br>";
				$res = 0;
				for($i=0; $i<$nr/2; $i++){
					$row1 = $RFM31->fetch_assoc();
					echo $row1["cus_name"] . ", " . $row1["cus_phone"] . ", " . $row1["response_percentage"] . ", "  . $row1["avg_monetary"] . ", "   . $row1["frequency"] . ", "   . $row1["recency"] ."<br>";
				}

			}
    	}
	} else {
    	echo "0 results";
	}


	$sql_RFM4 = "SELECT * FROM (SELECT * FROM (SELECT * FROM customer ORDER BY avg_monetary DESC LIMIT 12,12) as table1 ORDER BY frequency DESC LIMIT 6,6) as table2 ORDER BY recency ASC";
	$RFM4 = $mysqli->query($sql_RFM4);
	$RFM41 = $mysqli->query($sql_RFM4);
	$nr = $RFM4->num_rows;

	if ($RFM4->num_rows > 0) {
    	$i = 0;
    	$res = 0;
    	$j = 0;

    	while($row = $RFM4->fetch_assoc()) {
    		$res += $row["response_percentage"];
			$avg_res = $res/($nr/2);
			$BEI = ($avg_res - $breakeven_value)/$breakeven_value;//損益平衡指數
			$i++;
		//	echo $row["cus_name"] . ", " . $row["response_percentage"] . ", "  . $row["avg_monetary"] . ", "   . $row["frequency"] . ", "   . $row["recency"] ."<br>";
			//echo $avg_res . "<br>";
			if($i%($nr/2) == 0){
				$j++;
				$k++;
				echo "<br>" . $k . ", " . "22" . $j . ", " . $breakeven_value . ", " . round($avg_res,3) . ", " . round($BEI,2)  . "<br>";
				$res = 0;
				for($i=0; $i<$nr/2; $i++){
					$row1 = $RFM41->fetch_assoc();
					echo $row1["cus_name"] . ", " . $row1["cus_phone"] . ", " . $row1["response_percentage"] . ", "  . $row1["avg_monetary"] . ", "   . $row1["frequency"] . ", "   . $row1["recency"] ."<br>";
				}

			}
    	}
	} else {
    	echo "0 results";
	}


	?> 


</body>
</html>
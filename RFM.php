<?php
	//index.php是首頁
	
	//匯入連接MYSQL的檔案，使用剛剛建立的$mysqli物件
	require_once('db_connect.php');
	
	//刪除功能
	if(isset($_POST["pID"])){		
		$pID = $_POST["pID"];	
		$res = $mysqli->query("DELETE FROM `product` WHERE `product`.`product_id` = $pID");			
	}
	//查詢所有產品
	$res = $mysqli->query("select * from orders");
	$resR = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date)");
	$sum1 = mysqli_num_rows($resR);
	$sum1;
	$cate = (($sum1+(3-$sum1%3))/3);
	$cate1 = (($cate+(3-$cate%3))/3);
	$cate2 = (($cate1+(3-$cate1%3))/3);
	$cate554 = $cate2*2;
	$cate553 = $cate2*3;
	$cate552 = $cate2*4;
	$cate545 = $cate2*5;
	$cate544 = $cate2*6;
	$cate543 = $cate2*7;
	$cate542 = $cate2*8;
	$cate541 = $cate2*9;
	$cate232 = $cate2*10;
	$cate231 = $cate2*11;
	$cate223 = $cate2*12;
	$cate222 = $cate2*13;
	$cate221 = $cate2*14;
	$cate213 = $cate2*15;
	$cate212 = $cate2*16;
	$cate211 = $cate2*17;
	$cate133 = $cate2*18;
	$cate132 = $cate2*19;
	$cate131 = $cate2*20;
	$cate123 = $cate2*21;
	$cate122 = $cate2*22;
	$cate121 = $cate2*23;
	$cate113 = $cate2*24;
	$cate112 = $cate2*25;
	$cate111 = $cate2*26;

	$resRFM333 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate2");
	$resRFM332 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate2,$cate2");
	$resRFM331 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate554,$cate2");
	$resRFM323 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate553,$cate2");
	$resRFM322 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate552,$cate2");
	$resRFM321 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate545,$cate2");
	$resRFM313 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate544,$cate2");
	$resRFM312 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate543,$cate2");
	$resRFM311 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate542,$cate2");
	$resRFM233 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate541,$cate2");
	$resRFM232 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate232,$cate2");
	$resRFM231 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate231,$cate2");
	$resRFM223 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate223,$cate2");
	$resRFM222 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate222,$cate2");
	$resRFM221 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate221,$cate2");
	$resRFM213 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate213,$cate2");
	$resRFM212 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate212,$cate2");
	$resRFM211 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate211,$cate2");
	$resRFM133 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate133,$cate2");
	$resRFM132 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate132,$cate2");
	$resRFM131 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate131,$cate2");
	$resRFM123 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate123,$cate2");
	$resRFM122 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate122,$cate2");
	$resRFM121 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate121,$cate2");
	$resRFM113 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate113,$cate2");
	$resRFM112 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate112,$cate2");
	$resRFM111 = $mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by max(date),count(card_id),sum(money) limit $cate111,$cate2");




	
	$resF = $mysqli->query("select card_id as 會員,COUNT(*) as 次数 FROM orders GROUP BY card_id order by max(date),count(card_id)");
	$resF5 = $mysqli->query("select card_id as 會員,COUNT(*) as 次数 FROM orders GROUP BY card_id order by max(date),count(card_id) limit $cate1");	
	$resM = $mysqli->query("select card_id as 會員,sum(money) as 花費 FROM orders GROUP BY card_id order by sum(money) limit 143");
	$resC = $mysqli->query("select count(distinct card_id) as 人 FROM orders");

	

	while($rowRFM333 = mysqli_fetch_array($resRFM333)){ 
	$arrRFM333[] = array($rowRFM333['會員'],intval(3),intval(3),intval(3)); 
	}
	while($rowRFM332 = mysqli_fetch_array($resRFM332)){ 
	$arrRFM332[] = array($rowRFM332['會員'],intval(3),intval(3),intval(2)); 
	}
	while($rowRFM331 = mysqli_fetch_array($resRFM331)){ 
	$arrRFM331[] = array($rowRFM331['會員'],intval(3),intval(3),intval(1)); 
	}
	while($rowRFM323 = mysqli_fetch_array($resRFM323)){ 
	$arrRFM323[] = array($rowRFM323['會員'],intval(3),intval(2),intval(3)); 
	}
	while($rowRFM322 = mysqli_fetch_array($resRFM322)){ 
	$arrRFM322[] = array($rowRFM322['會員'],intval(3),intval(2),intval(2)); 
	}
	while($rowRFM321 = mysqli_fetch_array($resRFM321)){ 
	$arrRFM321[] = array($rowRFM321['會員'],intval(3),intval(2),intval(1)); 
	}
	while($rowRFM313 = mysqli_fetch_array($resRFM313)){ 
	$arrRFM313[] = array($rowRFM313['會員'],intval(3),intval(1),intval(3)); 
	}
	while($rowRFM312 = mysqli_fetch_array($resRFM312)){ 
	$arrRFM312[] = array($rowRFM312['會員'],intval(3),intval(1),intval(2)); 
	}
	while($rowRFM311 = mysqli_fetch_array($resRFM311)){ 
	$arrRFM311[] = array($rowRFM311['會員'],intval(3),intval(1),intval(1)); 
	}
	while($rowRFM233 = mysqli_fetch_array($resRFM233)){ 
	$arrRFM233[] = array($rowRFM233['會員'],intval(2),intval(3),intval(3)); 
	}
	while($rowRFM232 = mysqli_fetch_array($resRFM232)){ 
	$arrRFM232[] = array($rowRFM232['會員'],intval(2),intval(3),intval(2)); 
	}
	while($rowRFM231 = mysqli_fetch_array($resRFM231)){ 
	$arrRFM231[] = array($rowRFM231['會員'],intval(2),intval(3),intval(1)); 
	}
	while($rowRFM223 = mysqli_fetch_array($resRFM223)){ 
	$arrRFM223[] = array($rowRFM223['會員'],intval(2),intval(2),intval(3)); 
	}
	while($rowRFM222 = mysqli_fetch_array($resRFM222)){ 
	$arrRFM222[] = array($rowRFM222['會員'],intval(2),intval(2),intval(2)); 
	}
	while($rowRFM221 = mysqli_fetch_array($resRFM221)){ 
	$arrRFM221[] = array($rowRFM221['會員'],intval(2),intval(2),intval(1)); 
	}
	while($rowRFM213 = mysqli_fetch_array($resRFM213)){ 
	$arrRFM213[] = array($rowRFM213['會員'],intval(2),intval(1),intval(3)); 
	}
	while($rowRFM212 = mysqli_fetch_array($resRFM212)){ 
	$arrRFM212[] = array($rowRFM212['會員'],intval(2),intval(1),intval(2)); 
	}
	while($rowRFM211 = mysqli_fetch_array($resRFM211)){ 
	$arrRFM211[] = array($rowRFM211['會員'],intval(2),intval(1),intval(1)); 
	}
	while($rowRFM133 = mysqli_fetch_array($resRFM133)){ 
	$arrRFM133[] = array($rowRFM133['會員'],intval(1),intval(3),intval(3)); 
	}
	while($rowRFM132 = mysqli_fetch_array($resRFM132)){ 
	$arrRFM132[] = array($rowRFM132['會員'],intval(1),intval(3),intval(2)); 
	}
	while($rowRFM131 = mysqli_fetch_array($resRFM131)){ 
	$arrRFM131[] = array($rowRFM131['會員'],intval(1),intval(3),intval(1)); 
	}
	while($rowRFM123 = mysqli_fetch_array($resRFM123)){ 
	$arrRFM123[] = array($rowRFM123['會員'],intval(1),intval(2),intval(3)); 
	}
	while($rowRFM122 = mysqli_fetch_array($resRFM122)){ 
	$arrRFM122[] = array($rowRFM122['會員'],intval(1),intval(2),intval(2)); 
	}
	while($rowRFM121 = mysqli_fetch_array($resRFM121)){ 
	$arrRFM121[] = array($rowRFM121['會員'],intval(1),intval(2),intval(1)); 
	}
	while($rowRFM113 = mysqli_fetch_array($resRFM113)){ 
	$arrRFM113[] = array($rowRFM113['會員'],intval(1),intval(1),intval(3)); 
	}
	while($rowRFM112 = mysqli_fetch_array($resRFM112)){ 
	$arrRFM112[] = array($rowRFM112['會員'],intval(1),intval(1),intval(2)); 
	}
	while($rowRFM111 = mysqli_fetch_array($resRFM111)){ 
	$arrRFM111[] = array($rowRFM111['會員'],intval(1),intval(1),intval(1)); 
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>RFM</title>
	<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
	<link rel="stylesheet" type="text/css" href="all.css"/>
	
</head>
<a href ="welcome.html"> <img height="80px" width="110px" src="MOS01.png"></a>
   &emsp;&emsp;&emsp;&emsp;&emsp;
   <input type="button" class="stock_txt" value="上一頁" onclick="location.href='market.html';"/>	

<body>
<!-- 	<script> 
function dogo(){ 
  var urls = new Array(); 
  urls[0] = "RFM.php"; 
  urls[1] = "RFM3.php"; 
  urls[2] = "RFM4.php"; 

  n = Math.floor(Math.random()*3); 
  location.href= urls[n]; 
} 
</script> -->

	<form align="center" action="RFM.php" method="post">
		<br>
		<br>
		<br>
		<br>
				<br>
		<br>
		<br>
單位成本：<input type="text" name="UserName">
&emsp;&emsp;
單位淨利：<input type="text" name="UserName">
</form>
<br>
   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type ="button" class="stock_txt" onclick="javascript:location.href='RFM6.php'" value="確認"></input>
<!-- javascript:location.href='RFM.php' -->

</form>
</body>
</html>

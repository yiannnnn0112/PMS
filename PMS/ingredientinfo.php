
<?php

	//updProduct.php 是修改產品

	require_once('db_connect.php');

	//查詢原料
	// $sql_query_1 = "select ingredient_id as '原料ID',ingredient_name as'原料名稱',ingredient_cost as'原料價格'
	// 	from ingredient_cost";
	// mysql_query("SET NAMES 'utf8'");
	// $result = mysql_query($sql_query_1)	

	// $res = $mysqli->query("select * from ingredient");
	$res = $mysqli->query("SELECT A1.ingredient_id, A1.ingredient_name, A1.ingredient_cost,A1.freshness_date, A1.amount,date,shippingtime, A1.consume*A2.shippingtime,A1.consume*(A2.shippingtime+ A1.freshness_date) FROM ingredient A1,supply A2 WHERE A1.ingredient_id =A2.ingredient_id AND A2.supplier_id=2 ORDER BY ingredient_id;");

	// $res = $mysqli->query("SELECT A1.*, date,shippingtime FROM ingredient A1,supply A2 WHERE A1.ingredient_id =A2.ingredient_id;");

	// $fresh = $mysqli->query("SELECT A.ingredient_id, (B.shippingtime+ A.freshness_date) FROM ingredient as A,supply as B WHERE A.ingredient_id=B.ingredient_id");

	// $res1 = $mysqli->query("select ingredient_id as '原料ID',ingredient_name as'原料名稱',ingredient_cost as'原料價格'
	//  	from ingredient_cost")
	// $rs = mysqli_fetch_row($res)
	// $rs1 = mysqli_fetch_row($fresh)
	
	


	
?>
<!DOCTYPE html>	
<html>
<head>
	<title>原料需求預測</title>
		<link rel="stylesheet" type="text/css" href="all.css"/>
</head>
<body>	
	<a href ="welcome.html"> <img height="80px" width="110px" src="MOS01.png"></a>
   &emsp;&emsp;&emsp;&emsp;&emsp;
   <input type="button" class="stock_txt" value="上一頁" onclick="location.href='goods.html';"/>	
	
	<!-- <form action="ingredientinfo.php" method="POST" enctype="multipart/form-data" id="form"> -->
	<!-- <select name = "supplier">
		<?php  
			$su1 = "supplier1";
			$su2 = "supplier2";
			echo "<option>$su1</option>";
			echo "<option>$su2</option>";
		?>
	</select> -->
	</form>
		<table align="center" style="font-size:20px">
		<tr align="center">
			<td>原料ID</td>
			<td>原料名稱</td>
			<td>原料成本</td>
			<td>保鮮期</td>
			<td>存貨數量</td>
			<td>製造日期</td>
			<td>運送天數</td>
			<td>再訂購點</td>
			<td>再訂貨量</td>
		</tr>
		<?php while($rs = mysqli_fetch_row($res)) { ?>
			
		

		<tr>
			<td><?php echo $rs[0];?></td>
			<td><?php echo $rs[1];?></td>
			<td><?php echo $rs[2];?></td>
			<td><?php echo $rs[3];?></td>
			<td><?php echo $rs[4];?></td>
			<td><?php echo $rs[5];?></td>
			<td style="text-align:center"><?php echo $rs[6];?></td>
			
			<td><?php echo $rs[7];?></td>
			<td><?php echo $rs[8];?></td>

		
			<!-- <td><button onclick="upd(<?php echo $rs[0];?>)">修改</button></td> -->
			<!-- <td><button onclick="del(<?php echo $rs[0];?>)">刪除</button></td> -->
		</tr>
		<?php } ?>
		
	</table>
		
	<!-- </form> -->
	
</body>
<script src="./jquery-2.1.1.min.js"></script>
</html>
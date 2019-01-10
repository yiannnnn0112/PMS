<html>
<head>
	<title>PMS</title>
<?php

	//product_ingredient.php 查詢產品對應的原料
	require_once('db_connect.php');

	//當使用者從首頁點修改時，查詢欲修改的產品資訊
	if(isset($_GET["pID"])){
		$pID = $_GET["pID"];

		$res = $mysqli->query("SELECT * FROM product WHERE product_id = $pID ORDER BY product_id");
		$rs = mysqli_fetch_row($res);

	};


?>
</head>


<body>	
	<a href ="welcome.html"> <img height="80px" width="110px" src="MOS01.png"></a>
   &emsp;&emsp;&emsp;&emsp;&emsp;
   <input type="button" class="stock_txt" value="上一頁" onclick="location.href='index.php';"/>	
   <link rel="stylesheet" type="text/css" href="all.css"/>

	<!-- <a href="addProduct.php">新增產品</a> -->
	<form align="center" action="product_ingredient.php" method="POST" enctype="multipart/form-data" id="form">
		   <br>
		<table align="center" style="font-size:20px">

			<tr>
				<td>商品ID</td>
				<td>商品名稱</td>
			</tr>

			<tr>
				<td><?php echo $rs[0];?></td>
				<td><?php echo $rs[1];?></td>
			</tr>

			<tr>
				<td><br><td>
			</tr>

			<tr>
				<td>組合材料1</td>
				<td>組合數量1</td>
			</tr>

			<tr>
				<td><?php echo $rs[4];?></td>
				<td><?php echo $rs[5];?></td>
			</tr>
			<tr>
				<td><br><td>
			</tr>

			<tr>
				<td>組合材料2</td>
				<td>組合數量2</td>
			</tr>

			<tr>
				<td><?php echo $rs[6];?></td>
				<td><?php echo $rs[7];?></td>
			</tr>
			<tr>
				<td><br><td>
			</tr>

			<tr>
				<td>組合材料3</td>
				<td>組合數量3</td>
			</tr>

			<tr>
				<td><?php echo $rs[8];?></td>
				<td><?php echo $rs[9];?></td>
			</tr>
			<tr>
				<td><br><td>
			</tr>

			<tr>
				<td>組合材料4</td>
				<td>組合數量4</td>
			</tr>

			<tr>
				<td><?php echo $rs[10];?></td>
				<td><?php echo $rs[11];?></td>
			</tr>
			<tr>
				<td><br><td>
			</tr>

			<tr>
				<td>組合材料5</td>
				<td>組合數量5</td>
			</tr>

			<tr>
				<td><?php echo $rs[12];?></td>
				<td><?php echo $rs[13];?></td>
			</tr>


		
		</table>
		
	</form>
</body>

</html>
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
	$res = $mysqli->query("select * from product");	

?>
<!DOCTYPE html>
<html>
<head>
	<title>PMS</title>
</head>
<body>	
	<a href="index.php">所有產品</a>
	
	<a href="addProduct.php">新增產品</a>
	<a href="ingredientinfo.php">原料</a>
	<a href="marketing.php">行銷分析</a>
	<a href="RFM.php">RFM</a>
	<!-- <a href="RFM.php">RFM</a> -->

	
	<table>
		<tr>
			<td>ID</td>
			<td>品名</td>
			<td>價格</td>
			
			
			<td>修改</td>
			<!-- <td>刪除</td> -->
			<td>查詢原料</td>
		</tr>

		
		<?php while($rs = mysqli_fetch_row($res)) { ?>
		<tr>
			<td><?php echo $rs[0];?></td>
			<td><?php echo $rs[1];?></td>
			<td><?php echo $rs[2];?></td>
			
			
			<td><button onclick="upd(<?php echo $rs[0];?>)">修改</button></td>
			<!-- <td><button onclick="del(<?php echo $rs[0];?>)">刪除</button></td> -->
			<td><button onclick="ingredient(<?php echo $rs[0];?>)">查詢原料</button></td>

		</tr>
		<?php } ?>
		
	</table>
</body>
<script src="./jquery-2.1.1.min.js"></script>
<script type="text/javascript">
	function del(x){		
		$.ajax({
			url: 'index.php',
			type: 'POST',
			data: {				
				pID: x
			},
			dataType: "text",
			success: function(response) {
				location.href = "index.php";
			}
		});	
	}
	function upd(x){	
	
		location.href = "updProduct.php?pID="+x;	
			
	}
	function ingredient(x){
		location.href = "product_ingredient.php?pID="+x;
		// location.href= "ingredientinfo.php?pID="+x;
		// $res1 = $mysqli->query("select ingredient_id as '原料ID',ingredient_name as'原料名稱',ingredient_cost as'原料價格'
		// 	from ingredient_cost")
		
	}
</script>
</html>
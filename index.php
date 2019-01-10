<?php
	//index.php是首頁
	
	//匯入連接MYSQL的檔案，使用剛剛建立的$mysqli物件
	require_once('db_connect.php');
	
	//刪除功能
	if(isset($_POST["pID"])){		
		$pID = $_POST["pID"];	
		$res = $mysqli->query("DELETE FROM `product` WHERE `Id` = $pID");			
	}

	//查詢所有產品
	$res = $mysqli->query("select * from product");	

?>
<!DOCTYPE html>
<html>
<head>
	<title>產品原料轉換</title>
	<link rel="stylesheet" type="text/css" href="all.css"/>
</head>
<body>	

<a href ="welcome.html"> <img height="80px" width="110px" src="MOS01.png"></a>
   &emsp;&emsp;&emsp;&emsp;&emsp;
   <input type="button" class="stock_txt" value="上一頁" onclick="location.href='goods.html';"/>	
	<table align="center" style="font-size:20px">
		<tr align="center">
			<td >ID</td>
			<td>品名</td>
			<td>價格</td>
			<td>單位</td>
			<td>產地</td>
			<td>修改</td>
			<td>查詢原料</td>
		</tr>
		<?php while($rs = mysqli_fetch_row($res)) { ?>
		<tr>
			<td><?php echo $rs[0];?></td>
			<td><?php echo $rs[1];?></td>
			<td><?php echo $rs[2];?></td>
			<td><?php echo $rs[3];?></td>
			<td><?php echo $rs[4];?></td>
			<td><button onclick="upd(<?php echo $rs[0];?>)">修改</button></td>
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
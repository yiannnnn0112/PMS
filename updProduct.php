<html>
<head>
	<title>PMS</title>
<?php

	//updProduct.php 是修改產品

	require_once('db_connect.php');

	//當使用者從首頁點修改時，查詢欲修改的產品資訊
	if(isset($_GET["pID"])){
		$pID = $_GET["pID"];
		$res = $mysqli->query("select * from product where `product`.`product_id` = $pID");	
		$rs = mysqli_fetch_row($res);
	};	

	//當使用者修改後點確認，就會執行修改的功能
	if(isset($_POST["name"])){
		$pID = $_POST["pID"];
		$name = $_POST["name"];
		$price = $_POST["price"];
		
			
		$res = $mysqli->query("UPDATE `product` SET `name`='$name',`price`='$price' WHERE `product`.`product_id` = $pID");	
		header('Location: index.php');
	};			
?>
</head>
<body>	
	<a href ="welcome.html"> <img height="80px" width="110px" src="MOS01.png"></a>
   &emsp;&emsp;&emsp;&emsp;&emsp;
   <input type="button" class="stock_txt" value="上一頁" onclick="location.href='index.php';"/>	
	<link rel="stylesheet" type="text/css" href="all.css"/>
	<form align="center" action="updProduct.php" method="POST" enctype="multipart/form-data" id="form">
		<table align="center" >
			<tr>
				<td><input type="hidden" name="pID" value="<?php echo $rs[0];?>"/></td>					
			</tr>
			<tr>
				<td>品名</td>
				<td><input type="text" name="name" value="<?php echo $rs[1];?>"/></td>					
			</tr>
			<tr>
				<td>價格</td>
				<td><input type="text" name="price" value="<?php echo $rs[2];?>"/></td>				
			</tr>
			
			
			
		</table>
		<br>
		   &emsp;&emsp;&emsp;&emsp;&emsp;
		<button  type="submit" class="stock_txt" form="form">確認</button>
   &emsp;&emsp;&emsp;&emsp;&emsp;
	<button class="stock_txt" onclick="location.href='index.php'">取消</button>
	</form>
</body>

</html>
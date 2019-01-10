<html>
<head>
	<title>PMS</title>
<?php
	
	//addProduct.php是新增產品

	require_once('db_connect.php');

	//新增產品
	if(isset($_POST["name"])){
		
		$name = $_POST["name"];
		$price = $_POST["price"];
		
			
		$res = $mysqli->query("INSERT INTO `product`(`name`, `price`) 
							   VALUES ('$name','$price')");	
		header('Location: index.php');
	}			
?>
</head>
<body>	
	<a href="index.php">所有產品</a>
	<a href="addProduct.php">新增產品</a>
	<form action="addProduct.php" method="POST" enctype="multipart/form-data" id="form">
		<table>
			<tr>
				<td>品名</td>
				<td><input type="text" name="name" value="西瓜"/></td>					
			</tr>
			<tr>
				<td>價格</td>
				<td><input type="text" name="price" value="200"/></td>				
			</tr>
			
			
			
		</table>
		<button type="submit" form="form">確認</button>
	</form>
	<button onclick="location.href='index.php'">取消</button>
</body>

</html>
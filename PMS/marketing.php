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
	$res = $mysqli->query("select * from orders limit 30");
	$resR = $mysqli->query("select oproduct_id as 產品,oproduct_quantity as 數量 FROM orders GROUP BY oproduct_id order by oproduct_id limit 61,2");	
	$resF = $mysqli->query("select oproduct_id as 產品,oproduct_quantity as 數量 FROM orders GROUP BY oproduct_id order by oproduct_id limit 41,20");	
	$resM = $mysqli->query("select oproduct_id as 產品,oproduct_quantity as 數量,card_id as 會員,sum(money) as 花費 FROM orders GROUP BY oproduct_id order by oproduct_id limit 36");
	$resO = $mysqli->query("select oproduct_id as 產品,oproduct_quantity as 數量 FROM orders GROUP BY oproduct_id order by oproduct_id limit 36,5");
	$resC = $mysqli->query("select oproduct_id as 產品,oproduct_quantity as 數量 FROM orders GROUP BY oproduct_id order by oproduct_id limit 63,3");
	$resA = $mysqli->query("select oproduct_id as 產品,oproduct_quantity as 數量 FROM orders GROUP BY oproduct_id order by oproduct_id limit 66,4");
	$resB = $mysqli->query("select oproduct_id as 產品,oproduct_quantity as 數量 FROM orders GROUP BY oproduct_id order by oproduct_id limit 70,42");
	 while($row = mysqli_fetch_array($resM)){ 
	$arr[] = array($row['產品'],intval($row['數量'])); 

	// $arr3[] = array($row['花費']));
}
while($rowO = mysqli_fetch_array($resO)){ 
	$arr1[] = array($rowO['產品'],intval($rowO['數量'])); 

}
while($rowF = mysqli_fetch_array($resF)){ 
	$arr2[] = array($rowF['產品'],intval($rowF['數量'])); 

}
while($rowR = mysqli_fetch_array($resR)){ 
	$arr3[] = array($rowR['產品'],intval($rowR['數量'])); 

}
while($rowC = mysqli_fetch_array($resC)){ 
	$arr4[] = array($rowC['產品'],intval($rowC['數量'])); 

}
while($rowA = mysqli_fetch_array($resA)){ 
	$arr5[] = array($rowA['產品'],intval($rowA['數量'])); 

}
while($rowB = mysqli_fetch_array($resB)){ 
	$arr6[] = array($rowB['產品'],intval($rowB['數量'])); 

}
$data6 = json_encode($arr6);
$data5 = json_encode($arr5);
$data4 = json_encode($arr4);
$data3 = json_encode($arr3);
$data2 = json_encode($arr2);
 $data1 = json_encode($arr1);
$data = json_encode($arr); ?>
<html>
<head>
<meta charset="UTF-8" />
<title>產品熱門分析</title>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<link rel="stylesheet" type="text/css" href="all.css"/>
</head>
<body>
	<a href ="welcome.html"> <img height="80px" width="110px" src="MOS01.png"></a>
   &emsp;&emsp;&emsp;&emsp;&emsp;
   <input type="button" class="stock_txt" value="上一頁" onclick="location.href='market.html';"/>	

<div id="container" style="width: 550px; height: 400px; margin: 0 auto">

</div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: '單月內漢堡點單數'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $data;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container').highcharts(json);  
});


</script>
<div id="container1" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: '單月內附餐點單數'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $data1;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container1').highcharts(json);  
});
</script>
<div id="container2" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: '單月內附餐點單數'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $data2;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container2').highcharts(json);  
});
</script>
<div id="container3" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: '單月內沙拉點單數'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $data3;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container3').highcharts(json);  
});
</script>
<div id="container4" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: '單月內湯類點單數'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $data4;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container4').highcharts(json);  
});
</script>
<div id="container5" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: '單月內甜點單數'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $data5;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container5').highcharts(json);  
});
</script>
<div id="container6" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: '單月內飲料單數'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $data6;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container6').highcharts(json);  
});
</script>

</body>
</html>


	



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

	$cate = floor($sum1/3);
	$cate1 = floor($cate/3);
	$cate2 = floor($cate1/3);
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
	$arrRFM333[] = array($rowRFM333['會員'],intval(1)); 
	}
	while($rowRFM332 = mysqli_fetch_array($resRFM332)){ 
	$arrRFM332[] = array($rowRFM332['會員'],intval(1)); 
	}
	while($rowRFM331 = mysqli_fetch_array($resRFM331)){ 
	$arrRFM331[] = array($rowRFM331['會員'],intval(1)); 
	}
	while($rowRFM323 = mysqli_fetch_array($resRFM323)){ 
	$arrRFM323[] = array($rowRFM323['會員'],intval(1)); 
	}
	while($rowRFM322 = mysqli_fetch_array($resRFM322)){ 
	$arrRFM322[] = array($rowRFM322['會員'],intval(1)); 
	}
	while($rowRFM321 = mysqli_fetch_array($resRFM321)){ 
	$arrRFM321[] = array($rowRFM321['會員'],intval(1)); 
	}
	while($rowRFM313 = mysqli_fetch_array($resRFM313)){ 
	$arrRFM313[] = array($rowRFM313['會員'],intval(1)); 
	}
	while($rowRFM312 = mysqli_fetch_array($resRFM312)){ 
	$arrRFM312[] = array($rowRFM312['會員'],intval(1)); 
	}
	while($rowRFM311 = mysqli_fetch_array($resRFM311)){ 
	$arrRFM311[] = array($rowRFM311['會員'],intval(1)); 
	}
	while($rowRFM233 = mysqli_fetch_array($resRFM233)){ 
	$arrRFM233[] = array($rowRFM233['會員'],intval(1)); 
	}
	while($rowRFM232 = mysqli_fetch_array($resRFM232)){ 
	$arrRFM232[] = array($rowRFM232['會員'],intval(1)); 
	}
	while($rowRFM231 = mysqli_fetch_array($resRFM231)){ 
	$arrRFM231[] = array($rowRFM231['會員'],intval(1)); 
	}
	while($rowRFM223 = mysqli_fetch_array($resRFM223)){ 
	$arrRFM223[] = array($rowRFM223['會員'],intval(1)); 
	}
	while($rowRFM222 = mysqli_fetch_array($resRFM222)){ 
	$arrRFM222[] = array($rowRFM222['會員'],intval(1)); 
	}
	while($rowRFM221 = mysqli_fetch_array($resRFM221)){ 
	$arrRFM221[] = array($rowRFM221['會員'],intval(1)); 
	}
	while($rowRFM213 = mysqli_fetch_array($resRFM213)){ 
	$arrRFM213[] = array($rowRFM213['會員'],intval(1)); 
	}
	while($rowRFM212 = mysqli_fetch_array($resRFM212)){ 
	$arrRFM212[] = array($rowRFM212['會員'],intval(1)); 
	}
	while($rowRFM211 = mysqli_fetch_array($resRFM211)){ 
	$arrRFM211[] = array($rowRFM211['會員'],intval(1)); 
	}
	while($rowRFM133 = mysqli_fetch_array($resRFM133)){ 
	$arrRFM133[] = array($rowRFM133['會員'],intval(1)); 
	}
	while($rowRFM132 = mysqli_fetch_array($resRFM132)){ 
	$arrRFM132[] = array($rowRFM132['會員'],intval(1)); 
	}
	while($rowRFM131 = mysqli_fetch_array($resRFM131)){ 
	$arrRFM131[] = array($rowRFM131['會員'],intval(1)); 
	}
	while($rowRFM123 = mysqli_fetch_array($resRFM123)){ 
	$arrRFM123[] = array($rowRFM123['會員'],intval(1)); 
	}
	while($rowRFM122 = mysqli_fetch_array($resRFM122)){ 
	$arrRFM122[] = array($rowRFM122['會員'],intval(1)); 
	}
	while($rowRFM121 = mysqli_fetch_array($resRFM121)){ 
	$arrRFM121[] = array($rowRFM121['會員'],intval(1)); 
	}
	while($rowRFM113 = mysqli_fetch_array($resRFM113)){ 
	$arrRFM113[] = array($rowRFM113['會員'],intval(1)); 
	}
	while($rowRFM112 = mysqli_fetch_array($resRFM112)){ 
	$arrRFM112[] = array($rowRFM112['會員'],intval(1)); 
	}
	while($rowRFM111 = mysqli_fetch_array($resRFM111)){ 
	$arrRFM111[] = array($rowRFM111['會員'],intval(1)); 
	}
	$dataRFM333 = json_encode($arrRFM333);
	$dataRFM332 = json_encode($arrRFM332);
	$dataRFM331 = json_encode($arrRFM331);
	$dataRFM323 = json_encode($arrRFM323);
	$dataRFM322 = json_encode($arrRFM322);
	$dataRFM321 = json_encode($arrRFM321);
	$dataRFM313 = json_encode($arrRFM313);
	$dataRFM312 = json_encode($arrRFM312);
	$dataRFM311 = json_encode($arrRFM311);
	$dataRFM233 = json_encode($arrRFM233);
	$dataRFM232 = json_encode($arrRFM232);
	$dataRFM231 = json_encode($arrRFM231);
	$dataRFM223 = json_encode($arrRFM223);
	$dataRFM222 = json_encode($arrRFM222);
	$dataRFM221 = json_encode($arrRFM221);
	$dataRFM213 = json_encode($arrRFM213);
	$dataRFM212 = json_encode($arrRFM212);
	$dataRFM211 = json_encode($arrRFM211);
	$dataRFM133 = json_encode($arrRFM133);
	$dataRFM132 = json_encode($arrRFM132);
	$dataRFM131 = json_encode($arrRFM131);
	$dataRFM123 = json_encode($arrRFM123);
	$dataRFM122 = json_encode($arrRFM122);
	$dataRFM121 = json_encode($arrRFM121);
	$dataRFM113 = json_encode($arrRFM113);
	$dataRFM112 = json_encode($arrRFM112);
	$dataRFM111 = json_encode($arrRFM111);

?>

<!-- <?php 

//$dataR=$mysqli->query("select card_id as 會員,max(date) as 最近 FROM orders GROUP BY card_id order by date");//從member中選取全部(*)的資料
//$rs11=mysqli_fetch_row($dataR);//擷取資料的第一行，此句打兩次就會出現第二行，打三次出現第三行...
//echo $rs11[1]//將 $rs的第一欄顯示在畫面上
?> -->



<!DOCTYPE html>
<html>
<head>
	<title>RFM</title>
	<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
	
</head>
<body>	

	<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">

$(document).ready(function() {  
   var chart = {
      type: 'column'
   };
   var title = {
      text: 'RFM損益平衡指數'   
   };   
   var xAxis = {
      categories: ['111', '112', '113', '121', '122', '123', '131', '132', '133', '211', '212', '213', '221', '222', '223', '231', '232', '233', '311', '312', '313', '321', '322', '323', '331', '332', '333']
   };
   var credits = {
      enabled: false
   };
   var series= [{
      name: '損益平衡指數',
            data: [193, 192, 185, 180, 178, 176, 172, 168, 165, 160, 158, 159, -8, -9, 153, -13, -15, -150, -13, -15, -14, -14,-15, -16, -17, -18, -20]
        }
   ];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title; 
   json.xAxis = xAxis;
   json.credits = credits;
   json.series = series;
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
      text: 'RFM 111'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM111;?>
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
      text: 'RFM 112'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM112;?>
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
      text: 'RFM 113'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM113;?>
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
      text: 'RFM 121'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM121;?>
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
      text: 'RFM 122'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM122;?>
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

<div id="container27" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 123'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM123;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container27').highcharts(json);  
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
      text: 'RFM 131'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM131;?>
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

<div id="container7" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 132'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM132;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container7').highcharts(json);  
});
</script>

<div id="container8" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 133'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM133;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container8').highcharts(json);  
});
</script>

<div id="container9" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 211'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM211;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container9').highcharts(json);  
});
</script>

<div id="container10" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 212'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM212;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container10').highcharts(json);  
});
</script>

<div id="container11" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 213'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM213;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container11').highcharts(json);  
});
</script>

<div id="container12" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 221'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM221;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container12').highcharts(json);  
});
</script>

<div id="container13" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 222'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM222;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container13').highcharts(json);  
});
</script>

<div id="container14" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 223'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM223;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container14').highcharts(json);  
});
</script>

<div id="container15" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 231'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM231;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container15').highcharts(json);  
});
</script>

<div id="container16" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 232'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM232;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container16').highcharts(json);  
});
</script>

<div id="container17" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 233'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM233;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container17').highcharts(json);  
});
</script>

<div id="container18" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 311'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM311;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container18').highcharts(json);  
});
</script>

<div id="container19" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 312'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM312;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container19').highcharts(json);  
});
</script>

<div id="container20" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 313'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM313;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container20').highcharts(json);  
});
</script>

<div id="container21" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 321'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM321;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container21').highcharts(json);  
});
</script>

<div id="container22" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 322'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM322;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container22').highcharts(json);  
});
</script>

<div id="container23" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 323'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM323;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container23').highcharts(json);  
});
</script>

<div id="container24" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 331'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM331;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container24').highcharts(json);  
});
</script>

<div id="container25" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 332'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM332;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container25').highcharts(json);  
});
</script>

<div id="container26" style="width: 550px; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">
$(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: 'RFM 333'   
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
            format: '<b>{point.name}</b>',
            style: {
               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
         }
      }
   };
   var series= [{
      type: 'pie',
      name: 'Browser share',
      data: <?php echo $dataRFM333;?>
   }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container26').highcharts(json);  
});
</script>


	
	
	
</body>
<!-- <script src="./jquery-2.1.1.min.js"></script>
<script type="text/javascript">
	function del(x){		
		$.ajax({
			url: 'RFM.php',
			type: 'POST',
			data: {				
				pID: x
			},
			dataType: "text",
			success: function(response) {
				location.href = "RFM.php";
			}
		});	
	}
	function upd(x){	
	
		location.href = "updProduct.php?pID="+x;	
			
	}
</script> -->
</html>
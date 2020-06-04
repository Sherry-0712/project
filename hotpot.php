<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">    
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
    <link rel="stylesheet" href="store_all.css">
	<title>高大美食推推版-鍋類</title>
	<script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script> 
	<script src="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
		<script> 
			$(document).ready(function(){ 
			$('#circleContent').carousel({interval:5000});//每隔5秒自動輪播 
			}); 
		</script>
</head>
<body>
	<?php include("store_all.php");?>
	    
	<!-- 側邊欄 -->
      <div class="aside">
        <h3>美食分類</h3>
        <p><a href="rice.php">飯類</a></p>
        <p><a href="noodles.php">麵類</a></p>
        <p><a href="hotpot.php">鍋類</a></p>
        <p><a href="drink.php">飲料類</a></p>
      </div><!-- aside -->
	</br>

	<?php
	include("pro_conn.php");
	$SQL="SELECT * From store S WHERE S.class='hotpot' ORDER BY S.AVG_price DESC";
	$result=mysqli_query($link,$SQL);
	echo "<div style='margin-left: 5%;'>";
	echo "<table border='1' style='font-size: 28px;text-align: center;'>";
	echo "<tr>";
	echo "<td width='160'><b>店家名稱</b></td><td width='150'><b>店家電話</b></td><td width='380'><b>店家地址</b></td><td width='130'><b>平均價格</b></td><td width='70'><b>喜歡</b></td><td width='70'><b>不喜歡</b></td><td width='100'><b>收藏</b></td>";
	echo "</tr>";
	while ($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["Name"]."</td><td>".$row["Phone"]."</td><td>".$row["Address"]."</td><td>".$row["AVG_price"]."</td><td><a href=goodCount.php?No=".$row["No"]."><img src='https://img.ruten.com.tw/s1/a/38/89/21309251207305_670.jpg' width='30%'></a></td><td><a href=badCount.php?No=".$row["No"]."><img src='https://www.u4get.com/wp-content/uploads/2016/02/393247899_dislike_answer_2_xlarge.png' width='30%'></a></td><td><a href=coll_new.php?No=".$row["No"].">收藏</a></td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	?>

	<footer>
    <hr>
    <p style="font-size: 20px;text-align: center;">製作者：A1073304 蕭珮辰、A1073310 鄭莉靜、A1073318 周珉瑄</p>
    </footer>
    <!--BACKtoTOP-START-->
	<a style="display:scroll;position:fixed;bottom:0px;right:5px;" href="#" title="" onFocus="if(this.blur)this.blur()">
	<img alt='' border='0' src="photo/BtT.gif" width="100" onmouseout="this.src='photo/BtT.gif'" /></a>
	<!--BACKtoTOP-STOP-->
</body>
</html>
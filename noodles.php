<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">    
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
    <link rel="stylesheet" href="store_all.css">
    <link rel="stylesheet" href="noodles.css">
	<title>高大美食推推版</title>
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

	<?php
	include("pro_conn.php");
	$SQL="SELECT * From store S WHERE S.class='noodles' ORDER BY S.AVG_price DESC";
	$result=mysqli_query($link,$SQL);
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td><b>店家名稱</b></td><td><b>店家電話</b></td><td><b>店家地址</b></td><td><b>平均價格</b></td>";
	echo "</tr>";
	while ($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["Name"]."</td><td>".$row["Phone"]."</td><td>".$row["Address"]."</td><td>".$row["AVG_price"]."</td>";
		echo "</tr>";
	}
	echo "</table>";

	?>

	<footer>
    <hr>
    <p style="font-size: 20px;text-align: center;">製作者：A1073304 蕭珮辰、A1073310 鄭莉靜、A1073318 周珉瑄</p>
    <p class="text-right"><a href="#" style="margin-right: 15px;">Back to top</a></p>
    </footer>
</body>
</html>
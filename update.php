<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage.css">
    <title>更新店家</title>
</head>
<body>
    
<div class="down">

<center><h2>更改店家資訊</h2></center>

<?php
$No=$_GET["No"];

include("pro_conn.php");
$SQL="SELECT * FROM store WHERE No='$No'";
$result=mysqli_query($link,$SQL);

while ( $row=mysqli_fetch_assoc($result))
{
    $Name=$row["Name"];
    $Phone=$row["Phone"];
    $Address=$row["Address"];
    $AVG_price=$row["AVG_price"];
    $Class=$row["Class"];
    

}

echo "<div class='updateform'>";
    echo "<center><h2>店家資訊</h2></center>";
    echo "店家編號 :".$No."<br/>";
    echo "<form action='updatecheck.php' method='POST'>";
    echo "<input type='hidden' name='No' value='".$No."'>";
    echo "店家名稱 :<input type='text' name='Name' value='".$Name."'><br/>";
    echo "店家電話 :<input type='text' name='Phone' value='".$Phone."'><br/>";
    echo "店家地址 :<input type='text' name='Address' value='".$Address."'><br/>";
    echo "店家平均價格 :<input type='text' name='AVG_price' value='".$AVG_price."'><br/>";
    echo "店家類別 :<select name='Class' value='".$Class."'>
                            <option value='rice'>飯類</option>
                            <option value='noodles'>麵類</option>
                            <option value='hotpot'>火鍋</option>
                            <option value='drink'>飲料</option>
                        </select><br/>";
    echo "<div class='updateform_sub'>";
        echo "<input type='submit'  value='更新' style='font-size: 18px;'><br/>";
    echo "</div>";
    echo "</form>";
echo "</div>";


?>

<footer>
			<hr>
			<p>製作者：A1073304 蕭珮辰、A1073310 鄭莉靜、A1073318 周珉瑄</p>
			<div class="footer-copyright text-center py-3">© 2020 Copyright:　
		    	<a href="https://www.facebook.com/%E4%B9%96%E5%AD%AB%E3%84%9F-106159107679990/?ref=bookmarks">高大美食推推版</a>
		  	</div>
</footer>






</div>


</body>
</html>
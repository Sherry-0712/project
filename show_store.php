<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage.css">
 <title>管理者</title>
    
</head>


<body>
<div class="down">
    <center><h2>店家列表</h2></center>
    <div class="store_table">

        <?php
        include("pro_conn.php");
        $SQL="SELECT * FROM store";
        $result=mysqli_query($link,$SQL);

        echo "<table border='1' >";
        echo "<tr style='background-color:#cdedfd;font-size:20px;'>";
        echo "<td align='center' valign='center'>"."編號"."</td><td align='center' valign='center'>"."店名"."</td><td align='center' valign='center'>"."電話"."</td><td align='center' valign='center'>"."地址"."</td><td align='center' valign='center'>"."平均價格"."</td><td align='center' valign='center'>"."類別"."</td><td align='center' valign='center'>"."更新"."</td><td align='center' valign='center'>"."刪除"."</td>";
        echo "</tr>";
        while ( $row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
                
            
                echo"<td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Phone"]."</td><td>".$row["Address"]."</td><td>".$row["AVG_price"]."</td><td>".$row["Class"]."</td><td><a href=update.php?No=".$row["No"].">更新資料</a></td><td><a href=del.php?No=".$row["No"].">刪除資料</a></td>";
            echo "</tr>";
        }

        echo "</table>";


        ?>

        <style>
        tr:nth-child(even) {
            background: white ;
        }
        tr:nth-child(odd) {
            background-color:lightgray ;
        }
        </style>

    </div>
    <div class="down_table">
        <input type ="button" onclick="javascript:location.href='add.php'" value="新增店家" style="font-size: 18px;"></input>
        <input type ="button" onclick="javascript:location.href='manage.php'" value="回管理者首頁"style="font-size: 18px;" ></input>
    
    </div>
<footer>
			<hr>
			<p>製作者：A1073304 蕭珮辰、A1073310 鄭莉靜、A1073318 周珉瑄</p>
			<div class="footer-copyright text-center py-3">© 2020 Copyright:　
		    	<a href="https://www.facebook.com/%E4%B9%96%E5%AD%AB%E3%84%9F-106159107679990/?ref=bookmarks">高大美食推推版</a>
		  	</div>
	</footer>


   
</div>

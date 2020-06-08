<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage.css">
 <title>店家列表</title> 
 <style>
    tr:nth-child(even) {
        background: white ;
    }
    tr:nth-child(odd) {
        background-color:lightgray ;
    }
 </style>
</head>
<body>
<?php

$MNo=$_SESSION["MNo"];
if(isset($_SESSION["MNo"])){  
echo "<div class='down'>";
    echo "<center><h1>店家列表</h1></center>";
    echo "<div class='store_table'>";

        include("pro_conn.php");
        $SQL="SELECT * FROM store";
        $result=mysqli_query($link,$SQL);

        echo "<table border='1'>";
        echo "<tr style='background-color:#cdedfd;font-size:20px;'>";
        echo "<td align='center' valign='center'>"."編號"."</td><td align='center' valign='center'>"."店名"."</td><td align='center' valign='center'>"."電話"."</td><td align='center' valign='center'>"."地址"."</td><td align='center' valign='center'>"."平均價格"."</td><td align='center' valign='center'>"."類別"."</td><td align='center' valign='center'>"."更新"."</td><td align='center' valign='center'>"."刪除"."</td>";
        echo "</tr>";
        while ( $row=mysqli_fetch_assoc($result))
        {
            switch ($row["Class"]) {
                case 'rice':
                    $type="飯類";
                    break;
                case 'noodles':
                    $type="麵類";
                    break;
                case 'hotpot':
                    $type="鍋類";
                    break;
                case 'drink':
                    $type="飲料類";
                    break;  
            }
            echo "<tr>";           
                echo"<td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Phone"]."</td><td>".$row["Address"]."</td><td>".$row["AVG_price"]."</td><td>".$type."</td><td><a href=update.php?No=".$row["No"].">更新資料</a></td><td><a href=del.php?No=".$row["No"].">刪除資料</a></td>";
            echo "</tr>";
        }
        echo "</table>";

    echo "</div>";
    echo "<div class='down_table'>
        <a href='add.php' style='color: white;font-size: 20px;'>新增店家</a>
          
    </div>";
    echo "<footer style='text-align: center; '>
            </br></br></br></br>
            <hr>
            <a href='manage.php' style='color: white;font-size: 20px;text-decoration: none;'>回管理者首頁</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href='logout.php' style='color: white;font-size: 20px;text-decoration: none;'>登出管理頁面</a>
    </footer>
    </div>";
}else{
  echo "<div style='font-size: 30px;'>非法進入</br>";
  echo "3秒後 將自動導向至登入頁面</div>";
  echo "<script>
  setTimeout(function(){window.location.href='login.php';},3000);
  </script>";
}

?>
   


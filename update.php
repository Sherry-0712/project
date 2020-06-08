<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage.css">
    <title>更新店家</title>
</head>
<body>
<?php
    
    $MNo=$_SESSION["MNo"];
    if(isset($_SESSION["MNo"])){

echo "<div class='down'>";

echo "<center><h1>更改店家資訊</h1></center>";

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
        echo "<input type='submit' value='更新'></input>";
    echo "</div>";
    echo "</form>";
echo "</div>";
 
    echo "<footer style='text-align: center;'>
                </br></br></br></br>
                <hr>
                <a href='logout.php' style='color: white;font-size: 20px;text-decoration: none;'>登出管理頁面</a>
            </footer>
            </div>";
echo "</div>";
}else{
    echo "<div style='font-size: 30px;'>非法進入</br>";
    echo "3秒後 將自動導向至登入頁面</div>";
    echo "<script>
    setTimeout(function(){window.location.href='login.php';},3000);
    </script>";
}

?>


</body>
</html>
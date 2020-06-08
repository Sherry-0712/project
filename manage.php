<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage.css">
  <title>管理者</title>
    
</head>
<body>
<?php
$MNo=$_SESSION["MNo"];
if(isset($_SESSION["MNo"])){
echo "<div class='down'>";
    echo "<center><h1>管理者頁面</h1></center>";

    echo "<div class='control'>
        <div class='store'>   
        <a href='add.php' style='color: orange;font-size: 30px;'>新增店家</a>
        </div>";  #<!-- stroe -->
   
        echo "<div class='list'>
        <a href='show_store.php' style='color: orange;font-size: 30px;'>查看店家列表</a>
        </div>";  #<!-- list -->
  
        echo "<div class='analysis'>
        <a href='analysis.php' style='color: orange;font-size: 30px;'>查看分析結果</a>
        </div>";  #<!-- analysis -->
    echo "</div>";  #<!-- control -->
    
    echo "<footer style='text-align: center;margin-top:600px;'>
            </br></br>
      <hr>
            <a href='logout.php' style='color: white;font-size: 20px;text-decoration: none;'>登出管理頁面</a>
  </footer>";
echo "</div>";
#<!-- </div> down 的 -->
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
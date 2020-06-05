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
session_start();
$MNo=$_SESSION["MNo"];
if(isset($_SESSION["MNo"])){
echo "<div class='down'>";
    echo "<center><h1>管理者頁面</h1></center>";

    echo "<div class='control'>
        <div class='store'>   
        <input type ='button' onclick='javascript:location.href=add.php' value='新增店家' style='font-size: 30px; border:8px #73bfb8 double;'></input>
        </div>";  #<!-- stroe -->
   
        echo "<div class='list'>
        <input type ='button' onclick='javascript:location.href='show_store.php'' value='查看店家列表' style='font-size: 30px; border:8px orange double;'></input>
        </div>";  #<!-- list -->
  
        echo "<div class='analysis'>
        <input type ='button' onclick='javascript:location.href='analysis.php'' value='店家分析結果' style='font-size: 30px;border:8px #8661c1 double;'></input>
        </div>";  #<!-- analysis -->
    echo "</div>";  #<!-- control -->
    
    echo "<footer style='text-align: center;'>
            </br></br>
			<hr>
            <a href='logout.php' style='color: white;font-size: 20px;'>登出管理頁面</a>
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
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage.css">
    <title>新增店家</title>
</head>
<body>
    <?php
    
    $MNo=$_SESSION["MNo"];
    if(isset($_SESSION["MNo"])){
    echo "<div class='down'>";
    echo "<center><h1>新增店家</h1></center>";
        echo "<div class='addform'>
            <form action='addnew.php' method='POST'>
            <center>請輸入要新增</center>
            店家店名 :     <input type='text' name='Name'><br>
            店家電話 :     <input type='text' name='Phone'><br>
            店家地址 :     <input type='text' name='Address'><br>
            店家平均價格 : <input type='text' name='AVG_price' ><br/>
            店家類別 :     <select name='Class'>
                                <option value='rice'>飯類</option>
                                <option value='noodles'>麵類</option>
                                <option value='hotpot'>火鍋</option>
                                <option value='drink'>飲料</option>
                           </select>";
            
            echo "<div class='form_sub'>                      
                <input type='submit' value='新增' style='font-size: 18px;margin-left: 300px;'></input>
               
                </form>
            </div>
        </div>";
        
        echo "<footer style='text-align: center; margin-top:100px; '>
                </br></br></br></br>
                <hr>
                <a href='manage.php' style='color: white;font-size: 20px;text-decoration: none;'>回管理者頁面</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
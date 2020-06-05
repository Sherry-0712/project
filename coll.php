<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">    
	  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<title>我的美食收藏</title>
</head>
<body>
<?php 
  $UNo=$_SESSION["UNo"];
  if(isset($_SESSION["login"])){
	echo "<div class='container'>";	
      #<!-- 導覽列 -->
      echo "<nav class='navbar navbar-light' style='background-color: #e3f2fd;'>
        <div class='container-fluid'>";
		  #<!-- 導覽列的頁首 -->
          echo "<div class='navbar-header'>
		        <a class='navbar-brand' href='index.php' style='font-size: 18px;'>高大美食推推版</a>
            <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar'>
              <span class='sr-only'>導覽按鈕</span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </button>            
          </div>";#<!-- class="navbar-header" -->
		  
		  #<!-- 導覽列的項目 -->
          echo "<div id='navbar' class='navbar-collapse collapse'>
            <ul class='nav navbar-nav'>
              <li><a href='index.php' style='font-size: 18px;'>首頁</a></li>
              <li><a href='intro.php' style='font-size: 18px;''>關於我們</a></li>
              <li class='active'><a href='#' style='font-size: 18px;'>我的收藏</a></li>
            </ul>
            <p class='navbar-text navbar-right' style='font-size: 18px;color: #0072E3;'>誠摯歡迎閣下~　　<a href='logout.php'>登出</a></p>          
          </div>";#<!-- class="navbar-collapse collapse" -->
        echo "</div>";#<!-- container-fluid -->
      echo "</nav>
    </div>";#<!-- class="container" -->

    include("pro_conn.php");
    $SQL="SELECT * FROM collect C WHERE C.UNo='$UNo'";
    $result=mysqli_query($link,$SQL);
    while ($row=mysqli_fetch_assoc($result)){
      $SNo[]=$row["SNo"];
    }
    #echo $SNo[0].$SNo[1];
    $num=count($SNo);
    for ($i=0; $i < $num; $i++) { 
      #echo $SNo[$i]."</br>";
      #include("pro_conn.php");
      $SQL="SELECT * FROM store S WHERE S.No='$SNo[$i]'";
      #echo $SQL;
      $result=mysqli_query($link,$SQL);
      while ($row=mysqli_fetch_assoc($result)) {
        $Name[]=$row["Name"];
        $Phone[]=$row["Phone"];
        $Address[]=$row["Address"];
        $AVG_price[]=$row["AVG_price"];
      }
    }
    echo "<div style='margin-left: 7%;'>";
    echo "<table border='1' style='font-size: 28px;text-align: center;'>";
    echo "<tr>";
    echo "<td width='10'><b>編號</b></td><td width='220'><b>店家名稱</b></td><td width='200'><b>店家電話</b></td><td width='500'><b>店家地址</b></td><td width='180'><b>平均價格</b></td><td width='200'><b>取消收藏</b></td>";
    echo "</tr>";
    for ($i=0; $i < $num; $i++) {
      $j=$i+1; 
      echo "<tr>";
      echo "<td>".$j."</td><td>".$Name[$i]."</td><td>".$Phone[$i]."</td><td>".$Address[$i]."</td><td>".$AVG_price[$i]."</td><td><a href=del_coll.php?No=".$SNo[$i].">取消收藏</a></td>";
      echo "</tr>"; 
    }
    echo "</table>";
    echo "</div>";
    
    
#<!-- Footer -->
echo "</br>
<footer id='ft'>
<hr>
  <div class='footer-copyright text-center py-3'>
    <p style='font-size: 20px;text-align: center;'>製作者：A1073304 蕭珮辰、A1073310 鄭莉靜、A1073318 周珉瑄</p>
    © 2020 Copyright:　
    <a href='https://www.facebook.com/%E4%B9%96%E5%AD%AB%E3%84%9F-106159107679990/?ref=bookmarks'>高大美食推推版</a>
  </div>";
  #<!-- Copyright -->

echo "</footer></br>";
#<!-- Footer -->
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
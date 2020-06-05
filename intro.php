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
    <link rel="stylesheet" href="intro.css">
	<title>高大美食推推版的誕生</title>
</head>
<body>
  <?php
    if(isset($_SESSION["login"])){
      $date=strtotime("+5 days",time());
      $UNo=$_SESSION["UNo"];
      setcookie("UNo",$UNo,$date);
    }
	echo "<div class='container'>";	
      #<!-- 導覽列 -->
      echo "<nav class='navbar navbar-light' style='background-color: #e3f2fd;'>";
        echo "<div class='container-fluid'>";
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
              <li class='active'><a href='#' style='font-size: 18px;'>關於我們</a></li>";
              if(isset($_SESSION["UNo"])){
                echo "<li><a href='coll.php' style='font-size: 18px;'>我的收藏</a></li>";
              }
              echo "</ul>";
              if(isset($_SESSION["UNo"])){
                echo "<p class='navbar-text navbar-right' style='font-size: 18px;color: #0072E3;'>誠摯歡迎閣下~　　<a href='logout.php'>登出</a></p>";
              }else{
                  echo "<p class='navbar-text navbar-right' style='font-size: 18px;color: #0072E3;'>誠摯邀請閣下加入~　　<a href='login.php'>登入</a>/<a href='register.php'>註冊</a></p>"; 
              }
            #<p class="navbar-text navbar-right" style="font-size: 18px;color: #0072E3;">誠摯歡迎閣下~　　<a href='logout.php'>登出</a></p>          
          echo "</div>";#<!-- class="navbar-collapse collapse" -->
        echo "</div>";#<!-- container-fluid -->
      echo "</nav>
    </div>";#<!-- class="container" -->
 
    if($_SESSION["UNo"]==""){
        echo "<div class='alert alert-info alert-dismissible' style='width: 32%;margin-left: 33%;text-align: center;'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>好消息！</strong> 現在註冊/登入解鎖隨機選擇按鈕！
        </div>";
    }

    echo "<div>
      <img src='photo/good.jpg' class='img-rounded' width='18%' id='img_logo'>
    </div>";

    echo "<div class='panel panel-info' id='line'>
      <div style='margin-left: 8px;'>
        <p style='font-size: 30px;'>高大美食推推版的誕生</p>
        <p style='font-size: 20px;'>還在煩惱等一下要吃甚麼嗎？高大美食推推版提供您學長姊推薦的美食，</br>還有美食排行版可以瀏覽，讓你對高大的美食更加了解，從此擺脫這個麻煩事喔～</br>
            1.簡單實用的美食網站</br>
            2.收藏喜愛店家</br>
            3.給予店家評論</br>
            4.隨機選擇店家</br>
            5.美食排行榜
        </p>
      </div>";#<!-- 文字內容的div -->
    echo "</div>";#<!-- 面板框線 -->
    echo "<div id='clear'></div>";
    ?>


<!-- Footer -->
</br>
<footer>
<hr>
  <div class="footer-copyright text-center py-3">
    <p style='font-size: 20px;text-align: center;'>製作者：A1073304 蕭珮辰、A1073310 鄭莉靜、A1073318 周珉瑄</p>
    © 2020 Copyright:　
    <a href="https://www.facebook.com/%E4%B9%96%E5%AD%AB%E3%84%9F-106159107679990/?ref=bookmarks">高大美食推推版</a>
  </div>
  <!-- Copyright -->

</footer></br>
<!-- Footer -->

</body>
</html>
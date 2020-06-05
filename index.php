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
    <link rel="stylesheet" href="index.css">
	<title>高大美食推推版</title>
</head>
<body>
  <?php
    session_start();
    if(isset($_SESSION["login"])){
      $date=strtotime("+5 days",time());
      $UNo=$_SESSION["UNo"];
      setcookie("UNo",$UNo,$date);
    }
	echo "<div class='container'>";	
      #導覽列
      echo "<nav class='navbar navbar-light' style='background-color: #e3f2fd;'>";
        echo "<div class='container-fluid'>";
		  #<!-- 導覽列的頁首 -->
          echo "<div class='navbar-header'>";
		    echo "<a class='navbar-brand' href='#' style='font-size: 18px;'>高大美食推推版</a>";
            echo "<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar'>
              <span class='sr-only'>導覽按鈕</span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </button>";            
          echo "</div>";#<!-- class="navbar-header" -->
		  
		  #<!-- 導覽列的項目 -->
          echo "<div id='navbar' class='navbar-collapse collapse'>";
            echo "<ul class='nav navbar-nav'>
              <li class='active'><a href='#' style='font-size: 18px;'>首頁</a></li>
              <li><a href='intro.php' style='font-size: 18px;'>關於我們</a></li>";
              if(isset($_SESSION["UNo"])){
                echo "<li><a href='coll.php' style='font-size: 18px;'>我的收藏</a></li>";
              }
            echo "</ul>";
            if(isset($_SESSION["UNo"])){
                echo "<p class='navbar-text navbar-right' style='font-size: 18px;color: #0072E3;'>誠摯歡迎閣下~　　<a href='logout.php'>登出</a></p>";
            }else{
                echo "<p class='navbar-text navbar-right' style='font-size: 18px;color: #0072E3;'>誠摯邀請閣下加入~　　<a href='login.php'>登入</a>/<a href='register.php'>註冊</a></p>"; 
            }          
          echo "</div>";#<!-- class="navbar-collapse collapse" -->
        echo "</div>";#<!-- container-fluid -->
      echo "</nav>";
      if($_SESSION["UNo"]==""){
        echo "<div class='alert alert-info alert-dismissible' style='width: 32%;margin-left: 33%;text-align: center;'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>好消息！</strong> 現在註冊/登入解鎖隨機選擇按鈕！
        </div>";
      }
      #<!-- 第一個面板-->
        echo "<div class='panel panel-success' id='rice'>
              <div class='panel-heading'>
                <p class='four_class_p'><a href='rice.php'>飯類</a></p>
              </div>
              <div class='panel-body' style='text-align: center;'>";
              echo "<a class='btn btn-primary' href='rand_rice.php' role='button'>隨機選擇</a>";
              #echo "<input type=button onClick='location.href='rand_rice.php'' value='隨機選擇' style='font-size: 20px;'>";
              echo "</div>
        </div>";
      #<!-- 第二個面板-->
        echo "<div class='panel panel-info' id='noodle'>
              <div class='panel-heading'>
                <p class='four_class_p'><a href='noodles.php'>麵類</a></p>
              </div>
              <div class='panel-body' style='text-align: center;'>";
              echo "<a class='btn btn-primary' href='rand_noodles.php' role='button'>隨機選擇</a>";
                #<input type=button onClick='location.href='rand_noodles.php'' value='隨機選擇' style='font-size: 20px;'>
              echo "</div>
        </div>
        <div class='clear'></div>";
      #<!-- 第三個面板-->
        echo "<div class='panel panel-warning' id='pot'>
              <div class='panel-heading'>
                <p class='four_class_p'><a href='hotpot.php'>鍋類</a></p>
              </div>
              <div class='panel-body' style='text-align: center;'>";
              echo "<a class='btn btn-primary' href='rand_hotpot.php' role='button'>隨機選擇</a>";
                #<input type=button onClick='location.href='rand_hotpot.php'' value='隨機選擇' style='font-size: 20px;'>
              echo "</div>
        </div>";
      #<!-- 第四個面板-->
        echo "<div class='panel panel-danger' id='drink'>
              <div class='panel-heading'>
                <p class='four_class_p'><a href='drink.php'>飲料類</a></p>
              </div>
              <div class='panel-body' style='text-align: center;'>";
              echo "<a class='btn btn-primary' href='rand_drink.php' role='button'>隨機選擇</a>";
                #<input type=button onClick='location.href='rand_drink.php'' value='隨機選擇' style='font-size: 20px;'>
              echo "</div>
        </div>
        <div class='clear'></div>
    </div>";#<!-- class="container" -->

    echo "<marquee direction=up behavior=alternate width=100% height=60>
      <marquee direction=right behavior=alternate scrollamount=25>
      <font face='Microsoft JhengHei' color='#ff0000' style=font-size:30px>
        歡迎來到高大美食推推版~~~
      </font>
      </marquee>
    </marquee>";

    
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
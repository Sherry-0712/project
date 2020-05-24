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
	<div class="container">	
      <!-- 導覽列 -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
		  <!-- 導覽列的頁首 -->
          <div class="navbar-header">
		    <a class="navbar-brand" href="#" style="font-size: 18px;">高大美食推推版</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">導覽按鈕</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>            
          </div><!-- class="navbar-header" -->
		  
		  <!-- 導覽列的項目 -->
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#" style="font-size: 18px;">首頁</a></li>
              <li><a href="intro.php" style="font-size: 18px;">關於我們</a></li>
              <li><a href="coll.php" style="font-size: 18px;">收藏</a></li>
            </ul>
            <p class="navbar-text navbar-right" style="font-size: 18px;">誠摯歡迎閣下~　　<a href="login.php">登入</a>/<a href="register.php">註冊</a></p>          
          </div><!-- class="navbar-collapse collapse" -->
        </div><!-- container-fluid -->
      </nav>
      
      <!-- 第一個面板-->
        <div class="panel panel-success" id="rice">
              <div class="panel-heading">
                <p class="four_class_p"><a href="rice.php">飯類</a></p>
              </div>
              <div class="panel-body" style="text-align: center;">
                <input type=button onClick="location.href='rand_rice.php'" value='隨機選擇' style="font-size: 20px;">
              </div>
        </div>
      <!-- 第二個面板-->
        <div class="panel panel-info" id="noodle">
              <div class="panel-heading">
                <p class="four_class_p"><a href="noodles.php">麵類</a></p>
              </div>
              <div class="panel-body" style="text-align: center;">
                <input type=button onClick="location.href='rand_noodles.php'" value='隨機選擇' style="font-size: 20px;">
              </div>
        </div>
        <div class="clear"></div>
      <!-- 第三個面板-->
        <div class="panel panel-warning" id="pot">
              <div class="panel-heading">
                <p class="four_class_p"><a href="hotpot.php">鍋類</a></p>
              </div>
              <div class="panel-body" style="text-align: center;">
                <input type=button onClick="location.href='rand_hotpot.php'" value='隨機選擇' style="font-size: 20px;">
              </div>
        </div>
      <!-- 第四個面板-->
        <div class="panel panel-danger" id="drink">
              <div class="panel-heading">
                <p class="four_class_p"><a href="drink.php">飲料類</a></p>
              </div>
              <div class="panel-body" style="text-align: center;">
                <input type=button onClick="location.href='rand_drink.php'" value='隨機選擇' style="font-size: 20px;">
              </div>
        </div>
        <div class="clear"></div>
    </div><!-- class="container" -->

    <marquee direction=up behavior=alternate width=100% height=60>
      <marquee direction=right behavior=alternate scrollamount=25>
      <font face="Microsoft JhengHei" color="#ff0000" style=font-size:30px>
        歡迎來到高大美食推推版~~~
      </font>
      </marquee>
    </marquee>

    <footer>
      <hr>
      <p class="ft">製作者：A1073304 蕭珮辰、A1073310 鄭莉靜、A1073318 周珉瑄</p>
      <p class="mg"><a href="mg_login.php">管理者登入</a></p>
    </footer>
</body>
</html>
<div class="container"> 
      <!-- 導覽列 -->
      <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
      <!-- 導覽列的頁首 -->
          <div class="navbar-header">
        <a class="navbar-brand" href="index.php">高大美食推推版</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
              <span class='sr-only'>導覽按鈕</span>
              <span class='icon-bar' style='background-color: #0072E3;'></span>
              <span class='icon-bar' style='background-color: #0072E3;'></span>
              <span class='icon-bar' style='background-color: #0072E3;'></span>
            </button>            
          </div><!-- class="navbar-header" -->
      
      <!-- 導覽列的項目 -->
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php" style="font-size: 18px;">首頁</a></li>
              <li><a href="intro.php" style="font-size: 18px;">關於我們</a></li>
              <li><a href="coll.php" style="font-size: 18px;">我的收藏</a></li>
            </ul>
            <p class="navbar-text navbar-right" style="font-size: 18px;color: #0072E3;">誠摯歡迎閣下~　　<a href='logout.php'>登出</a></p>          
          </div><!-- class="navbar-collapse collapse" -->
        </div><!-- container-fluid -->
      </nav>
    <!-- 輪播 -->
      <div id="myCarousel" class="carousel slide">
      <!-- 輪播指示 -->
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
    
    <!-- 輪播內容 -->
      <div class="carousel-inner">
      <!-- 第一個輪播項目 (包含圖片、標題與介紹) --> 
          <div class="item active">
          <a href="introduction.html"><img src="https://pica.nidbox.net/48/1472452168_eeac9a2b_48.jpg" width="310" style="margin-left: 23%;"></a>
            <div class="carousel-caption">
              <h1>飯類</h1>
              <p class="lead">蓋飯先生</p>
            </div>
          </div>
      
      <!-- 第二個輪播項目 (包含圖片、標題與介紹) --> 
          <div class="item">
            <a href="recipe.html"><img src="https://farm5.staticflickr.com/4305/36258879166_6e72214ce7_b.jpg" width="340" style="margin-left: 20%;"></a>
            <div class="carousel-caption">
              <h1>麵類</h1>
              <p class="lead">阿寶米粉羹</p>
            </div>
          </div>
      
          <!-- 第三個輪播項目 (包含圖片、標題與介紹) --> 
      <div class="item">
            <a href="recipe.html"><img src="https://farm8.staticflickr.com/7810/32357232807_c7698b73e6_b.jpg" width="350" style="margin-left: 20%;"></a>
            <div class="carousel-caption">
              <h1>鍋類</h1>
              <p class="lead">拾鮮鍋物</p>
            </div>
          </div>
          <!-- 第四個輪播項目 (包含圖片、標題與介紹) --> 
      <div class="item">
            <a href="recipe.html"><img src="https://www.beauty321.com/albums_photo/13807-201910011739486346.jpg" width="400" style="margin-left: 14%;"></a>
            <div class="carousel-caption">
              <h1>飲料類</h1>
              <p class="lead">麻古茶坊</p>
            </div>
          </div>
        </div>
    
    <!-- 輪播控制 -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
      
  </div><!-- class="container" -->
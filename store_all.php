	<div class="container">	
      <!-- 導覽列 -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
		  <!-- 導覽列的頁首 -->
          <div class="navbar-header">
		    <a class="navbar-brand" href="index.php" style="font-size: 18px;">高大美食推推版</a>
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
              <li><a href="index.php" style="font-size: 18px;">首頁</a></li>
              <li><a href="intro.php" style="font-size: 18px;">關於我們</a></li>
              <li><a href="coll.php" style="font-size: 18px;">我的收藏</a></li>
            </ul>
            <p class="navbar-text navbar-right" style="font-size: 18px;">誠摯歡迎閣下~</p>          
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
          <a href="introduction.html"><img src="photo/good.jpg" width="280" style="margin-left: 25%;"></a>
            <div class="carousel-caption">
              <h1>烘培社</h1>
              <p class="lead">帶你體驗動手做甜點的樂趣！</p>
            </div>
          </div>
      
      <!-- 第二個輪播項目 (包含圖片、標題與介紹) --> 
          <div class="item">
            <a href="recipe.html"><img src="photo/login.jpg" width="400" style="margin-left: 25%;"></a>
            <div class="carousel-caption">
              <h1>社課 – 布丁</h1>
              <p class="lead">Q 彈布丁入口即化！</p>
            </div>
          </div>
      
          <!-- 第三個輪播項目 (包含圖片、標題與介紹) --> 
      <div class="item">
            <a href="recipe.html"><img src="photo/good.jpg" width="280" style="margin-left: 25%;"></a>
            <div class="carousel-caption">
              <h1>社課 – 檸檬塔</h1>
              <p class="lead">酸酸甜甜讓你意猶未盡！</p>
            </div>
          </div>

          <!-- 第四個輪播項目 (包含圖片、標題與介紹) --> 
      <div class="item">
            <a href="recipe.html"><img src="photo/login.jpg" width="400" style="margin-left: 25%;"></a>
            <div class="carousel-caption">
              <h1>社課 – 巧克力小西餅</h1>
              <p class="lead">巧克力的香濃氣味讓你欲罷不能！</p>
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
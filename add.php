<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage.css">
    <title>新增店家</title>
</head>
<body>
    <div class="down">
    <center><h2>新增店家</h2></center>
        <div class="addform">
            <form action="addnew.php" method="POST" enctype="multipart/form-data">
            <!-- 照片非文字，所以要加上enctype="multipart/form-data"行 -->
            <center>請輸入要新增</center>
            店家店名 :     <input type="text" name="Name"><br>
            店家電話 :     <input type="text" name="Phone"><br>
            店家地址 :     <input type="text" name="Address"><br>
            店家平均價格 : <input type='text' name='AVG_price' ><br/>
            店家類別 :     <select name="Class" >
                                <option value="rice">飯類</option>
                                <option value="noodles">麵類</option>
                                <option value="hotpot">火鍋</option>
                                <option value="drink">飲料</option>
                           </select>
            <div class="form_sub">            
                           
                <input type="submit" value="新增"  style="font-size: 18px;">

                <input type ="button" onclick="javascript:location.href='manage.php'" value="回管理者首頁"  style="font-size: 18px;" ></input>
                </form>
            </div>
        </div>
        <footer>
			<hr>
			<p>製作者：A1073304 蕭珮辰、A1073310 鄭莉靜、A1073318 周珉瑄</p>
			<div class="footer-copyright text-center py-3">© 2020 Copyright:　
		    	<a href="https://www.facebook.com/%E4%B9%96%E5%AD%AB%E3%84%9F-106159107679990/?ref=bookmarks">高大美食推推版</a>
		  	</div>
	</footer>

    </div>

        
</body>
</html>
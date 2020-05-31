<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="register.css">
	<title>入坑申請</title>
</head>
<body>
	<div class="register_title">
		<p><b>高大美食推推版</b></p>
	</div>
	<div class="down">
	</br></br></br></br></br></br></br></br></br>
		<div class="register_form">
			<p><b>入坑申請</b></p>
			<form action="useradd.php" method="POST">
				　　使用者名稱：<input type="text" name="Name" required></br>
				　　　　　密碼：<input type="password" name="Password" required></br>
				　　　電子郵件：<input type="email" name="Email" required></br>
				<input type="submit" class="reg_sub" value="確定入坑" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type=button onClick="location.href='login.php'" value='直接登入' style="font-size: 18px;">
			</form>
		</div> <!--class="register_form"的-->

		<footer>
			<hr>
			<p>製作者：A1073304 蕭珮辰、A1073310 鄭莉靜、A1073318 周珉瑄</p>
			<div class="footer-copyright text-center py-3">© 2020 Copyright:　
		    	<a href="https://www.facebook.com/%E4%B9%96%E5%AD%AB%E3%84%9F-106159107679990/?ref=bookmarks">高大美食推推版</a>
		  	</div>
		</footer>
	</div><!--class="down"的-->
	<!--BACKtoTOP-START-->
	<a style="display:scroll;position:fixed;bottom:0px;right:5px;" href="#" title="" onFocus="if(this.blur)this.blur()">
	<img alt='' border='0' src="photo/BtT.gif" width="100" onmouseout="this.src='photo/BtT.gif'" /></a>
	<!--BACKtoTOP-STOP-->
</body>
</html>
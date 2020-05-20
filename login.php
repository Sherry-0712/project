<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="login.css">
	<title>饕客登入</title>
</head>
<body>
	<!--<div class="logo"><img src="photo/goodgood.jpg" width=10%></div>-->
	<div class="login_title">
		<p><b>高大美食推推版</b></p>
	</div>
	<div class="down">
	</br></br></br></br></br></br></br></br></br>
		<div class="login_form">
			<p>饕客登入</p>
			<form action="login_check.php" method="POST">
				　　使用者名稱：<input type="text" name="Name" required></br>
				　　　　　密碼：<input type="password" name="Password" required></br>
				<input type="submit" value="提交" class="log_sub" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type=button onClick="location.href='register.php'" value='註冊' style="font-size: 18px;">
			</form>
		</div> <!--class="login_form"的-->
		<footer>
			<hr>
			<p>製作者：A1073304 蕭珮辰、A1073310 鄭莉靜、A1073318 周珉瑄</p>
		</footer>
	</div><!--class="down"的-->
	<!--BACKtoTOP-START-->
	<a style="display:scroll;position:fixed;bottom:0px;right:5px;" href="#" title="" onFocus="if(this.blur)this.blur()">
	<img alt='' border='0' src="photo/BtT.gif" width="100" onmouseout="this.src='photo/BtT.gif'" /></a>
	<!--BACKtoTOP-STOP-->
</body>
</html>
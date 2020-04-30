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
				　　　電子郵件：<input type="email" name="Email" required=></br>
				<input type="submit" class="reg_sub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type=button onClick="location.href='login.php'" value='直接登入'>
			</form>
		</div> <!--class="register_form"的-->

		<footer>
			<hr>
			<p>製作者：A1073304 蕭珮辰、A1073310 鄭莉靜、A1073318 周珉瑄</p>
		</footer>
	</div><!--class="down"的-->
</body>
</html>
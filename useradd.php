<?php
$Name=$_POST["Name"];
$Password=$_POST["Password"];
$Email=$_POST["Email"];
$Type='general';

include("pro_conn.php");
$SQL="INSERT INTO user(Name,Password,Email,Type) VALUES('$Name','$Password','$Email','$Type')";
if($result=mysqli_query($link,$SQL)){
	header("Location:login.php");
}else{
	echo "註冊失敗，請重新輸入並檢查格式有無錯誤";
	echo "3秒後 將自動導向回註冊頁面";
	echo "
		<script>
		setTimeout(function(){window.location.href='register.php';},3000);
		</script>
		";
}
?>
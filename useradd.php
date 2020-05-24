<?php
$Name=$_POST["Name"];
$Password=$_POST["Password"];
$Email=$_POST["Email"];

include("pro_conn.php");
$SQL="INSERT INTO general(Name,Password,Email) VALUES('$Name','$Password','$Email')";
if($result=mysqli_query($link,$SQL)){
	header("Location:index.php");
}else{
	echo "註冊失敗，請重新輸入並檢查格式有無錯誤";
	echo "
		<script>
		setTimeout(function(){window.location.href='register.php';},1000);
		</script>
		";
}
?>
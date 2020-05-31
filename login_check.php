<?php
ob_start(); //緩衝區header不會先跑，會先等其他動作做完
session_start();

$Name=$_POST["Name"];
$Password=$_POST["Password"];
include("pro_conn.php");
$SQL="SELECT * FROM user WHERE Name='$Name' AND Password='$Password'";
if ($result=mysqli_query($link,$SQL)) {
	if($row=mysqli_fetch_assoc($result)){
		if ($row["Type"]=='manager') {
			$_SESSION["login"]="T"; //session變數可跨檔案
			$_SESSION["MNo"]=$row["No"];
			header("Location:manage.php");
		}else{
			$_SESSION["login"]="T";
			$_SESSION["UNo"]=$row["No"];
			header("Location:index.php");
		}
	}else{
		$_SESSION["login"]="F";
		echo "使用者名稱或密碼錯誤";
		echo "
		<script>
		setTimeout(function(){window.location.href='login.php';},1000);
		</script>
		";
	}
}
?>
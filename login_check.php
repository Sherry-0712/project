<?php
$Name=$_POST["Name"];
$Password=$_POST["Password"];
include("pro_conn.php");
$SQL="SELECT * FROM general WHERE Name='$Name' AND Password='$Password'";
if ($result=mysqli_query($link,$SQL)) {
	if(mysqli_fetch_assoc($result)){
		header("Location:index.php");
	}else{
		echo "登入失敗";
	}
}
?>
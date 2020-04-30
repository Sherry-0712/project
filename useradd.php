<?php
$Name=$_POST["Name"];
$Password=$_POST["Password"];
$Email=$_POST["Email"];

include("pro_conn.php");
$SQL="INSERT INTO general(Name,Password,Email) VALUES('$Name','$Password','$Email')";
if($result=mysqli_query($link,$SQL)){
	header("Location:index.php");
}else{
	echo "新增失敗";
}
?>
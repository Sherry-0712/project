<?php
$No=$_GET["No"];
#echo $No;
include("pro_conn.php");
$SQL="SELECT * From store S WHERE S.No='$No'";
$result=mysqli_query($link,$SQL);
while ($row=mysqli_fetch_assoc($result)){
	$Good=$row["Good"];
	$Class=$row["Class"];
}

$Good+=1;
#echo $Good;
echo $Class;
$SQL_G="UPDATE store SET Good='$Good' WHERE No='$No'";
if($result_G=mysqli_query($link,$SQL_G)){
	header('Location:'.$Class.'.php');
}else{
	echo "系統出錯，請聯繫管理員！</br>";
	echo "管理員電話：0912-345-678";
	echo "<script>
    setTimeout(function(){window.location.href='index.php';},3000);
    </script>";
}
?>
<?php
$No=$_GET["No"];
#echo $No;
include("pro_conn.php");
$SQL="SELECT * From store S WHERE S.No='$No'";
$result=mysqli_query($link,$SQL);
while ($row=mysqli_fetch_assoc($result)){
	$Good=$row["Bad"];
	$Class=$row["Class"];
}

$Bad+=1;
#echo $Bad;
echo $Class;
$SQL_B="UPDATE store SET Bad='$Bad' WHERE No='$No'";
if($result_B=mysqli_query($link,$SQL_B)){
	header('Location:'.$Class.'.php');
}else{
	echo "系統出錯，請聯繫管理員！</br>";
	echo "管理員電話：0912-345-678";
	echo "<script>
    setTimeout(function(){window.location.href='index.php';},3000);
    </script>";
}
?>
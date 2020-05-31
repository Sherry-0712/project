<?php
$No=$_GET["No"];

include("pro_conn.php");
$SQL="DELETE FROM collect WHERE SNo=$No";
if($result=mysqli_query($link,$SQL)){
	header("Location:coll.php");
}else{
	echo "取消收藏失敗";
	echo "<script>
    setTimeout(function(){window.location.href='coll.php';},1500);
    </script>";
}
?>
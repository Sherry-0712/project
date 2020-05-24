<?php

include("pro_conn.php");
$SQL="SELECT No From store S WHERE S.class='hotpot'";
$result=mysqli_query($link,$SQL);
while ($row=mysqli_fetch_assoc($result)){
	$No[]=$row["No"];
}

$No[]=shuffle($No);
$rand_No=$No[0];
$res_SQL="SELECT * FROM store WHERE No='$rand_No'";
$res=mysqli_query($link,$res_SQL);
echo "<table border='1' style='font-size: 32px;text-align: center;'>";
echo "<tr>";
echo "<td width='220'><b>店家名稱</b></td><td width='200'><b>店家電話</b></td><td width='500'><b>店家地址</b></td><td width='180'><b>平均價格</b></td><td width='100'><b>收藏</b></td>";
echo "</tr>";
while ($row=mysqli_fetch_assoc($res)){
	echo "<tr>";
	echo "<td>".$row["Name"]."</td><td>".$row["Phone"]."</td><td>".$row["Address"]."</td><td>".$row["AVG_price"]."</td><td><a href=coll.php?No=".$row["No"].">收藏</a></td>";
	echo "</tr>";
}
echo "</table>";

?>
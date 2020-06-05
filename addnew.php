<?php
$Name=$_POST["Name"];
$Phone=$_POST["Phone"];
$Address=$_POST["Address"];
$AVG_price=$_POST["AVG_price"];
$Class=$_POST["Class"];

include("pro_conn.php");
$SQL="INSERT INTO store (Name,Phone,Address,AVG_price,Class)VALUES ('$Name','$Phone','$Address','$AVG_price','$Class')";



if($result = mysqli_query($link,$SQL))
{
    header('Location:manage.php');
}
else
{
    echo "新增失敗";
    echo "3秒後 將自動導向至管理者頁面";
    echo "<script>
    setTimeout(function(){window.location.href='manage.php';},3000);
    </script>";
}
?>


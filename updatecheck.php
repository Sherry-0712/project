<?php
$No=$_POST["No"];
$Name=$_POST["Name"];
$Phone=$_POST["Phone"];
$Address=$_POST["Address"];
$AVG_price=$_POST["AVG_price"];
$Class=$_POST["Class"];

include("pro_conn.php");

$SQL="UPDATE store SET Name='$Name' , Phone='$Phone' , Address='$Address' , AVG_price='$AVG_price' , Class='$Class' WHERE No='$No'";

// echo $SQL;


if($result = mysqli_query($link,$SQL))
{
    header('Location:show_store.php');
}
else
{
    echo "update fail";
}



?>
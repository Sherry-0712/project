<?php
    $SNo=$_GET["No"];
    include("pro_conn.php");
    $SQL_S="SELECT * From store WHERE No='$SNo'"; #取相應的店家資料
    #使用者的資料用session嗎?

    $result_S=mysqli_query($link,$SQL_S);
    while ($row=mysqli_fetch_assoc($result_S)){ #取值
      $SName=$row["Name"];
      $Phone=$row["Phone"];
      $Address=$row["Address"];
      $AVG_price=$row["AVG_price"];
    }
    #寫另一個SQL把使用者編號跟店家編號INSERT上去(table是collect)
    #再把它連到coll.php show出來

?>
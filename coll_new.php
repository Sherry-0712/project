<?php
  ob_start(); //緩衝區header不會先跑，會先等其他動作做完
  session_start();
  #取相應的店家編號
  $SNo=$_GET["No"];
  #取得使用者編號
  $UNo=$_SESSION["UNo"];
  echo $SNo;
  echo $UNo;
  include("pro_conn.php");
  $SQL="INSERT INTO collect(UNo,SNo) VALUES('$UNo','$SNo')";
  echo $SQL;
  if($result=mysqli_query($link,$SQL)){
  header("Location:coll.php");
  }else{
    echo "新增失敗";
    echo "<script>
    setTimeout(function(){window.location.href='index.php';},1000);
    </script>";
  }
?>
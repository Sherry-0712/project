<?php
$GoodR=0;$BadR=0;
$GoodN=0;$BadN=0;
$GoodH=0;$BadH=0;
$GoodD=0;$BadD=0;

  //rice
  include("pro_conn.php");
  $SQLr="SELECT * From store S WHERE S.class='rice'";   
  $result=mysqli_query($link,$SQLr);
  while ($row=mysqli_fetch_assoc($result)){
    $No[]=$row["No"];
    $GoodR+=$row["Good"];
    $BadR+=$row["Bad"];
  }
  $ricenum=count($No);

  //noodles
  $SQLn="SELECT * From store S WHERE S.class='noodles'";  
  $result=mysqli_query($link,$SQLn);
  while ($row=mysqli_fetch_assoc($result)){
    $No1[]=$row["No"];
    $GoodN+=$row["Good"];
    $BadN+=$row["Bad"];
  }
  $noodlesnum=count($No1);
  
  //hotpot
  $SQLh="SELECT * From store S WHERE S.class='hotpot'";  
  $result=mysqli_query($link,$SQLh);
  while ($row=mysqli_fetch_assoc($result)){
    $No2[]=$row["No"];
    $GoodH+=$row["Good"];
    $BadH+=$row["Bad"];
  }
  $hotpotnum=count($No2);

  //drinks
  $SQLd="SELECT * From store S WHERE S.class='drink'";  
  $result=mysqli_query($link,$SQLr);
  while ($row=mysqli_fetch_assoc($result)){
    $No3[]=$row["No"];
    $GoodD+=$row["Good"];
    $BadD+=$row["Bad"];
  }
  $drinknum=count($No3);
  

  #計算收藏的次數，印出圖表
  include("pro_conn.php");
    $SQL="SELECT C.SNo,COUNT(*) AS num From collect C GROUP BY C.SNo"; 
    $result=mysqli_query($link,$SQL);
    while ($row=mysqli_fetch_assoc($result)){
      $SNo[]=$row["SNo"];
      $num[]=$row["num"];
    }

    $SNonum=count($SNo);
    for ($i=0; $i < $SNonum; $i++) { 
        $SQL_N="SELECT * FROM Store WHERE No='$SNo[$i]'";
      $result=mysqli_query($link,$SQL_N);
      while ($row=mysqli_fetch_assoc($result)){
        $Name[$i]=$row["Name"];
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="manage.css">
    <title>後臺分析</title>
</head>
<body>

  <div class='container'>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">店家類別分析</a></li>
    <li><a data-toggle="tab" href="#menu1">各類喜歡數量統計</a></li>
    <li><a data-toggle="tab" href="#menu2">收藏店家次數</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active"><!--店家類別分析-->
      <h2 style="text-align: center;">店家類別分析</h2>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var ricenum=<?php echo $ricenum ?>;
        var noodlesnum=<?php echo $noodlesnum ?>;
        var hotpotnum=<?php echo $hotpotnum ?>;
        var drinknum=<?php echo $drinknum ?>;

        var data = google.visualization.arrayToDataTable([
          ['類別', '店家數量'],
          ['飯類',    ricenum],
          ['麵類', noodlesnum],
          ['鍋類',  hotpotnum],
          ['飲料類',  drinknum],
        ]);

        var options = {
          title: '店家類別分析',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </div><!--店家類別分析結束-->


    <div id="menu1" class="tab-pane fade"><!--各類喜歡數量統計-->
      <h2 style="text-align: center;">各類喜歡數量統計</h2>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      google.charts.load("current", {packages:['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var GoodR=<?php echo $GoodR ?>;
        var GoodN=<?php echo $GoodN ?>;
        var GoodH=<?php echo $GoodH ?>;
        var GoodD=<?php echo $GoodD ?>;
        var data = google.visualization.arrayToDataTable([
          ["類別", "喜歡數", { role: "style" } ],
          ["飯類", GoodR, "lightblue"],
          ["麵類", GoodN, "red"],
          ["鍋類", GoodH, "orange"],
          ["飲料類", GoodD, "color: lightgreen"]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var options = {
          title: "各類喜歡數量統計",
          width: 600,
          height: 400,
          bar: {groupWidth: "95%"},
          legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }
    </script>
    <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
    </div><!--各類喜歡數量統計結束-->


    <div id="menu2" class="tab-pane fade"><!--收藏店家次數-->
      <h2 style="text-align: center;">收藏店家次數</h2>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var SNonum=<?php echo $SNonum ?>;
        //var SName[];
        //for (var i = 0; i < SNonum; i++) {
        //  SName[i]='<?php echo $Name[0];?>';
        //}
        var Name='<?php echo $Name[0] ?>';
        var Nametwo='<?php echo $Name[1] ?>';
        var num=<?php echo $num[0] ?>;
        var numtwo=<?php echo $num[1] ?>;
        
        var data = google.visualization.arrayToDataTable([
          ["店家名稱", "次數", { role: "style" } ],
          [Name, num, "#b87333"],
          [Nametwo, numtwo, "silver"]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var options = {
          title: "收藏店家次數",
          width: 600,
          height: 400,
          bar: {groupWidth: "95%"},
          legend: { position: "none" },
        };
        var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
        chart.draw(view, options);
    }
    </script>
    <div id="barchart_values" style="width: 900px; height: 300px;"></div>
    </div><!--收藏店家次數結束-->
  </div>
</div>


  <footer style='text-align: center;margin-top: 100px;'>
    <hr>
    <a href="manage.php" style='font-size: 20px;text-decoration: none;'>回管理者首頁</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href='logout.php' style='font-size: 20px;text-decoration: none;'>登出管理頁面</a>
  </footer>

</body>
</html>
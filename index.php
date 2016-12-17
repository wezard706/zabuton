<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>†漆黒からの解放†</title>

        <!--スタイルシート-->  
        <link href="./css/jquery.slider.css" rel="stylesheet" type="text/css" />  
        <link href="css/bootstrap.min.css" rel="stylesheet">   
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link href="./font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!--JavaScript-->
        <script type="text/javascript" src="./js/common/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="./js/amcharts/amcharts.js"></script>
        <script type="text/javascript" src="./js/common/jquery.tablefix.js"></script>
        <script type="text/javascript" src="./js/common/jquery-ui.min.js"></script>  
        <script type="text/javascript" src="./js/common/jquery.slider.min.js"></script>
        <script type="text/javascript" src="./js/common/encoding.min.js"></script>
        <script type="text/javascript" src="./js/update.js"></script>
        <script type="text/javascript" src="./js/utility.js"></script>
        <script language="JavaScript"> 
          // setInterval("myTimeprev()",1000);
          $(document).ready(function () {
            hsize = $(window).height();
            $("#wrap").css("height", hsize + "px");
          });
          $(window).resize(function () {
            hsize = $(window).height();
            $("#wrap").css("height", hsize + "px");
          });
          $(document).ready(function () {
            hsize = $(window).height();
            $("#main_container").css("height", hsize + "px");
          });
          $(window).resize(function () {
            hsize = $(window).height();
            $("#main_container").css("height", hsize + "px");
          });
        </script>
    </head>

    <body onload="update();">
      <div id="wrap">
        <div id="main_container" class="container">
          <h1>†漆黒からの解放†</h1>
          <div id="first_row" class="row">
            <div id="sittime_container" class="col-lg-6 border">
              <p id="sittime_value">現在の着座時間は&nbsp;&nbsp;<span class="emp">8時間22分</span>&nbsp;&nbsp;です</p>
            </div>
            <div id="irritate_container" class="col-lg-6 border">
              <p id="irritate_value">現在のイライラ度は&nbsp;&nbsp;<span class="emp">80%</span>&nbsp;&nbsp;です</p>
            </div>
          </div>
          <div id="second_row" class="row"> 
            <div id="main" class="col-lg-12 border">
              <div id="graph-container">
                <div id="worktime_chart">グラフ</div>
              </div>
            </div>
          </div>
          <div id="control_zabuton_container">
            <input type="button" class="btn btn-primary btn-lg" value="動かす" onclick=""/>
            <input type="button" class="btn btn-primary btn-lg" value="止める" onclick=""/>
          </div>
          <div id="footer" class="row">
            <div id="member" class="circle col-lg-4 footer_contents">
            <p>メンバー紹介</p></div> 
            <div id="review" class="circle col-lg-4 footer_contents"><p>解放された人々</p></div> 
            <div id="tomato_stress" class="circle col-lg-4 footer_contents"><p>トマトのストレス</p><div>
            <!-- 
            <div class="col-lg-4 footer_contents border"><img src="./img/member.png" class="img-responsive center-block"></div> 
            <div class="col-lg-4 footer_contents border"><img src="./img/member.png" class="img-responsive center-block"></div> 
            <div class="col-lg-4 footer_contents border"><img src="./img/member.png" class="img-responsive center-block"><div>
             -->
          </div>
        </div>
      </div>
    </body>
</html>
      
      

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>〇〇〇</title>

        <!--スタイルシート-->  
        <link href="./css/jquery.slider.css" rel="stylesheet" type="text/css" />  
        <link href="css/bootstrap.min.css" rel="stylesheet">   
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 

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
          setInterval("myTimeprev()",1000);
        </script>
    </head>

    <body onload="update();">
      <div id="wrap">
        <div class="container">
          <div class="row">
            <div id="sidebar" class="col-lg-12 border">
              <div class="row">
                <div id="sittime_container" class="col-lg-6 border">
                  <p>着座時間</p>
                  <p id="sittime_value">8時間22分</p></div>
                <div id="irritate_container" class="col-lg-6 border">
                  <p>イライラ度</p>
                  <p id="irritate_value">80%</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row"> 
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
        </div>
      </div>
    </body>
</html>
      
      

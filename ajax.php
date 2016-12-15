<?php
  
    // データベースに接続
    $servName  = "133.70.169.200";  
    $servPort  = "5432";            
    $userName  = "postgres";        
    $password  = "masukawa";        
    $dbName    = "chikura";         
    $connect_str = "host=$servName port=$servPort user=$userName password=$password dbname=$dbName";
    $serv_conn = pg_connect($connect_str);
    if (!$serv_conn) {
        exit;
    }

    $result = "dummy";
    
	$array_all = array(
        "result" => $result
	);

    print json_encode($array_all); // JSON出力
    pg_close($serv_conn);
?>
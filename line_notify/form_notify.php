<?php
define('LINE_API',"https://notify-api.line.me/api/notify");
$id_fixed = (rand(100000,999999));
$token = "gUv9FrYNesRzhpe4TT8sdHu1lly327aZRcICzdjCubU"; //ใส่Token ที่copy เอาไว้
$str = "🔔 รายการ RP$id_fixed 🔔
        วันที่: 20/08/64 เวลา 16:10
        ผู้แจ้ง:  Alexander Pierce
        อุปกรณ์:  Computer
        ปัญหา: เปิดไม่ติด
----------------------------------------------
                WWW.FIX-STORE.COM
"; //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
$res = notify_message(htmlspecialchars_decode($str),$token);
print_r($res);
function notify_message($message,$token){
 $queryData = array('message' => $message);
 $queryData = http_build_query($queryData,'','&');
 $headerOptions = array( 
         'http'=>array(
            'method'=>'POST',
            'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
                      ."Authorization: Bearer ".$token."\r\n"
                      ."Content-Length: ".strlen($queryData)."\r\n",
            'content' => $queryData
         ),
 );
 $context = stream_context_create($headerOptions);
 $result = file_get_contents(LINE_API,FALSE,$context);
 $res = json_decode($result);
 return $res;
}
?>
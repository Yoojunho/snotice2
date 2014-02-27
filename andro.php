<?php
$connect = mysql_connect("localhost", "root", "ysj082400"); //DB 주소 바꿔주시믄 감사하겠슴다

mysql_selectdb("Main"); //DB 선택

mysql_query("set names utf8"); //이것 또한 한글(utf8)을 지원하기 위한 것

 

$qry = "select * from main;";

$result = mysql_query($qry);

 

$xmlcode = "<?xml version = \"1.0\" encoding = \"utf-8\"?-->\n"; 

 

while($obj = mysql_fetch_object($result))

{

    $name = $obj->name;

    $price = $obj->price;

 

    $xmlcode .= "<node>\n";

    $xmlcode .= "<eventname>$eventname</eventname>\n";

    $xmlcode .= "<eventhost>$eventhost</eventhost>\n";

    $xmlcode .= "<eventsdate>$eventsdate</eventsdate>\n";

    $xmlcode .= "<eventfdate>$eventfdate</eventfdate>\n";

    $xmlcode .= "<eventtime>$eventtime</eventtime>\n";

    $xmlcode .= "<eventstyle>$eventstyle</eventstyle>\n";

    $xmlcode .= "<eventpres>$eventpres</eventpres>\n";

    $xmlcode .= "<image>$image</image>\n";

    $xmlcode .= "<id>$id</id>\n";

    $xmlcode .= "<eventp>$eventp</eventp>\n";

    $xmlcode .= "</node>\n";

}

 

$dir = "http://snotice.co.kr"; 

$filename = $dir."/searchresult.xml";

 

file_put_contents($filename, $xmlcode); //xmlcode의 내용을 xml파일로 출력

?>

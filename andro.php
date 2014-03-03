<?php

$connect = mysql_connect("localhost", "root", "ysj082400"); //DB 주소 바꿔주시믄 감사하겠슴다

mysql_selectdb("Main");

mysql_query("set names utf8");

$qry = "select * from main;";

$result = mysql_query($qry);

 

$xmlcode = "<?xml version = \"1.0\" encoding = \"utf-8\"?-->\n"; 

 

while($obj = mysql_fetch_object($result))

{

    $eventname = $obj->eventname;

    $eventhost = $obj->eventhost;




    $eventsdate = $obj->eventsdate;

    $eventfdate = $obj->eventfdate;

    $eventtime = $obj->eventtime;

    $eventstyle = $obj->eventstylet;

    $eventpres = $obj->eventpres;

    $image = $obj->image;

    $id = $obj->id;

    $eventp = $obj->eventp;

 

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

 

$dir = "ec2-54-199-209-96.ap-northeast-1.compute.amazonaws.com/snotice2/xml/"; //파일 저장 경로

$filename = $dir."/searchresult.xml"; 

file_put_contents($filename, $xmlcode); 

?>

<?php

$connect = mysql_connect("localhost", "root", "ysj082400"); //DB 주ì ëê주ìë ê?¬íê?´ë

mysql_selectdb("Main");

$qry = "SELECT * FROM main WHERE eventsdate >= DATE_ADD(now(), INTERVAL -1 DAY)";

$result = mysql_query($qry);



$xmlcode = "<?xml version = \"1.0\" encoding = \"utf-8\"?>\n";



while($obj = mysql_fetch_object($result))

{

    $eventname = $obj->eventname;

    $eventhost = $obj->hostname;

    $eventsdate = $obj->eventsdate;

    $eventfdate = $obj->eventfdate;

    $eventtime = $obj->eventtime;

    $eventstyle = $obj->eventstyle;

    $eventpres = $obj->eventpres;

    $image = $obj->image;

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

    $xmlcode .= "<eventp>$eventp</eventp>\n";

    $xmlcode .= "</node>\n";

}

$filename = "./xml/searchresult.xml";

file_put_contents($filename, $xmlcode);
?>

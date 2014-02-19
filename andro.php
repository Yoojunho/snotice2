<?php
$dbc = mysql_connect("localhost", "root", "ysj082400");
mysql_select_db("Main", $dbc);

$q=mysql_query("SELECT * FROM main WHERE eventfdate>'".$mdate = date("Y,m,d,H,i,s")."'");

while($e=mysql_fetch_assoc($q))
    $string[]=$e;


print(json_encode($string));

mysql_close($dbc);

?>_

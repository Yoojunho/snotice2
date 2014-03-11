<?
ini_set('register_globals','1'); // 임시로 register_globals = on 시킴
ini_set('session.bug_compat_42','1');
ini_set('session.bug_compat_warn','0');
ini_set('session.auto_start','1');

extract($_POST);
extract($_GET);
extract($_SERVER);
extract($_FILES);
extract($_ENV);
extract($_COOKIE);
extract($_SESSION);

 $dbc = mysql_connect("localhost", "root", "ysj082400");
 mysql_select_db("Main",$dbc);
 mysql_query("set session character_set_connection=utf8;");
 mysql_query("set session character_set_result=utf8;");
 mysql_query("set session character_set_client=utf8;");
 ?>

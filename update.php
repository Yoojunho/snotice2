<!doctype html>
<head>
	<meta charset ="utf-8">
</head>	
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
 

include "db_info.php";


$id = $_GET[id]; $pass = $_POST[pass];

$result = mysql_query("select pass from main where id = '$_GET[id]'", $dbc);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}

$row=mysql_fetch_array($result);

if ($pass==$row[pass]) {
	$query = "UPDATE main SET eventname='$eventname', hostname='$hostname', eventsdate='$eventsdate', eventfdate='$eventfdate', eventtime='$eventtime', eventstyle='$eventstyle', eventpres='$eventpres', image='$image', eventp='$eventp' WHERE id=$_GET[id]";
    $result=mysql_query($query, $dbc);
}
else {
	echo ("
	<script>
	alert('비밀번호가 일치하지 않습니다.');
	history.go(-1);
	</script>
	");
	exit;
} 

mysql_close($dbc);

echo ("<meta http-equiv='Refresh' content='1; URL=read.php?id=$_GET[id]'>");

?>

<center>
	<font size=2>정상적으로 수정되었습니다.</font>
</center>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
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

$result=mysql_query("SELECT pass FROM main WHERE id='$_GET[id]'",
$dbc);
$row=mysql_fetch_array($result);

if ($pass==$row[pass] )
{
	$query = "DELETE FROM main WHERE id='$_GET[id]'";
	$result=mysql_query($query, $dbc);
}
else
{
	echo ("
	<script>
	alert('비밀번호가 일치하지 않습니다.');
	history.go(-1);
	</script>
	");
	exit;
}
?>
<center>
<meta http-equiv='Refresh' content='1; URL=list.php'>
<FONT size=2 >삭제되었습니다.</font>
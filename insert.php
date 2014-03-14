<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
 
 $eventname = $_POST['eventname'];
 $hostname = $_POST['hostname'];
 $eventsdate = $_POST['eventsdate'];
 $eventfdate = $_POST['eventfdate'];
 $eventtime=$_POST['eventtime'];
 $eventstyle=$_POST['eventstyle'];
 $eventpres = $_POST['eventpres'];
 $pass=$_POST['pass'];
 $image = $_FILES['image']['name'];
 $eventp = $_POST['eventp'];
 
  ini_set("display_errors", "1");
$uploaddir = '/var/www/snotice2/images/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
} else {
    print "파일 업로드 공격의 가능성이 있습니다!\n";
}
 mysql_query("set names utf8");
 $query = "INSERT INTO main(eventname, hostname, eventsdate, eventfdate, eventtime, eventstyle, eventpres, image, id, pass, wdate, view, eventp) VALUES('$eventname', '$hostname', '$eventsdate', '$eventfdate', '$eventtime', '$eventstyle', '$eventpres', '$image', '', '$pass', now(), 0, '$eventp')";
 $result = mysql_query($query, $dbc) 
     or die('Error querying database');
	 mysql_close($dbc);
	 
	 echo ("<meta http-equiv='Refresh' content='1; URL=list.php'>");
?>
<center>
	<font size=2>정상적으로 저장 되었습니다.</font>
</center>

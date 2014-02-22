<!DOCTYPE >
<head>
	<meta charset ="utf-8">
	<title>스노티스 행사 입력</title>
</head>
<style>
<!--
td {font-size : 9pt;}
A:link {font : 9pt; color : black; text-decoration : none;
font-family : 굴림; font-size : 9pt;}
A:visited {text-decoration : none; color : black; font-size : 9pt;}
A:hover {text-decoration : underline; color : black; 
font-size : 9pt;}
-->
</style>
</head>

<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>
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

	$result=mysql_query("SELECT * FROM main WHERE id='$_GET[id]'", $dbc);
	$row=mysql_fetch_array($result);
?>

<table width=800 border=0 cellpadding=2 cellspacing=1
bgcolor=#ff4444>
<tr>
	<td height=40 colspan=4 align=center bgcolor=#ff4444>
		<font color=white><B><?=$row[eventname]?></B></font>
	</td>
</tr>
<tr>
	<td width=50 height=20 align=center bgcolor=#ff4444><font color=white >주최자</td>
	<td	width=240 bgcolor=white><?=$row[hostname]?></td>
	<td width=50 height=20 align=center bgcolor=#ff4444><font color=white>행사 종류</td>
	<td	width=240 bgcolor=white><?=$row[eventstyle]?></td>
</tr>
<tr>
	<td width=80 height=20 align=center #ff4444><font color=white>
	행사 시작일</td><td width=240
	bgcolor=white><?=$row[eventsdate]?></td>
	<td width=80 height=20 align=center #ff4444><font color=white>행사 종료일</td>
	<td	width=240 bgcolor=white><?=$row[eventfdate]?></td>
</tr>
<tr>
	<td width=80 height=20 align=center #ff4444><font color=white>
	행사 시간</td><td width=240
	bgcolor=white><?=$row[eventtime]?></td>
	<td width=50 height=20 align=center #ff4444><font color=white>행사 장소</td>
	<td	width=240 bgcolor=white><?=$row[eventp]?></td>
</tr>
<tr>
    <td width=50 height=20 align=center #ff4444><font color=white>행사 포스터</td>
	<td	width=240 bgcolor=white><?=$row[image]?></td>
	<td width=50 height=20 align=center #ff4444>
		<a href="images/<?=$row[image]?>">
			<font color=white>파일보기(클릭)</font></a>
   </td>
<tr>
	<td bgcolor=white colspan=4>
	<font color=black>
	<pre><?=$row[eventpres]?></pre>
	</font>
	</td>
</tr>
<tr>
	<td colspan=4 bgcolor=#ff4444>
	<table width=100%>
		<tr>
			<td width=200 align=left height=20>
				<a href=list.php?no=<?=$no?>><font color=white>
				[목록보기]</font></a>
				<a href=write.php><font color=white>
				[글쓰기]</font></a>
				<a href=edit.php?id=<?=$id?>><font color=white>
				[수정]</font></a>
				<a href=predel.php?id=<?=$id?>>
				<font color=white>[삭제]</font></a>
			</td>
			<td align=right>
<?
	$query=mysql_query("SELECT id FROM main WHERE id > $id LIMIT 1", 
	$dbc);
	$prev_id=mysql_fetch_array($query);

	if ($prev_id[id])
	{
		echo "<a href=read.php?id=$prev_id[id]>
		<font color=white>[이전]</font></a>";
	}
	else
	{
		echo "[이전]";
	}

	$query=mysql_query("SELECT id FROM main WHERE id < $id 
	ORDER BY id DESC LIMIT 1", $dbc);
	$next_id=mysql_fetch_array($query);

	if ($next_id[id])
	{
		echo "<a href=read.php?id=$next_id[id]>
		<font color=white>[다음]</font></a>";
	}
	else
	{
		echo "[다음]";
	}
mysql_close($dbc);

?>
			</td>
		</tr>
	</table>
	</b></font>
	</td>
</tr>
</table>
</center>
</body>
</html>


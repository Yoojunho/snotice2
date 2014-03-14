<!DOCTYPE >
<head>
	<title>스노티스 행사 입력</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?

include "db_info.php";

$page_size=10;
$page_list_size = 10;

if (!$no || $no < 0) $no=0;


$query = "SELECT * FROM main ORDER BY id DESC LIMIT $no,$page_size";
mysql_query("set names utf8");
$result = mysql_query($query, $dbc);

$result_count=mysql_query("SELECT count(*) FROM main",$dbc);
$result_row=mysql_fetch_row($result_count);
$total_row = $result_row[0];


if ($total_row <= 0) $total_row = 0;
$total_page = ceil($total_row / $page_size);

$current_page = ceil(($no+1)/$page_size);
?>

<style>
<!--
td {font-size : 9pt;}
A:link {font : 9pt;color : black;text-decoration : none; fontfamily
: 굴;font-size : 9pt;}
A:visited {text-decoration : none; color : black; font-size : 9pt;}
A:hover {text-decoration : underline; color : black; font-size : 9pt;}
-->
</style>
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>

<font size=2>스노티스 행사 안내</a>
<BR>
<BR>

<table width=850 border=0 cellpadding=2 cellspacing=1
bgcolor=#ff4444>

<tr height=20 bgcolor=#ff4444>
	<td width=30 align=center>
		<font color=white>번</font>
	</td>
	<td width=370 align=center>
		<font color=white>행사 제목</font>
	</td>
	<td width=100 align=center>
		<font color=white>주최자</font>
	</td>
	<td width=150 align=center>
		<font color=white>등록일</font></font>
	</td>
	<td width=40 align=center>
		<font color=white>조회수</font>
	</td>
</tr>

<?
while($row=mysql_fetch_array($result))
{
?>

<tr>
	<td height=20 bgcolor=white align=center>
		<a href="read.php?id=<?=$row[id]?>&no=<?=$no?>">
		<?=$row[id]?></a>
	</td>
	<td height=20 bgcolor=white>&nbsp;
		<a href="read.php?id=<?=$row[id]?>&no=<?=$no?>">
		<?=strip_tags($row[eventname], '<b><i>');?></a>
	</td>
	<td align=center height=20 bgcolor=white>
		<font color=black><?=$row[hostname]?></font>
	</td>
	<td align=center height=20 bgcolor=white>
		<font color=black><?=$row[wdate]?></font>
	</td>
	<td align=center height=20 bgcolor=white>
		<font color=black><?=$row[view]?></font>
	</td>
</tr>
<?
} 
mysql_close($dbc);
?>
</table>
<table border=0>
<tr>
	<td width=600 height=20 align=center rowspan=4>
	<font color=gray>
	&nbsp;
<?
$start_page = floor(($current_page - 1) / $page_list_size) 
				* $page_list_size + 1;

$end_page = $start_page + $page_list_size - 1;

if ($total_page < $end_page) $end_page = $total_page;
if ($start_page >= $page_list_size) {
	$prev_list = ($start_page - 2)*$page_size;
	echo "<a href=\"$PHP_SELF?no=$prev_list\">"<"</a>\n";
}

for ($i=$start_page;$i <= $end_page;$i++) {
	$page= ($i-1) * $page_size;
	if ($no!=$page){
		echo "<a href=\"$PHP_SELF?no=$page\">";
	}
	
	echo " $i ";
	
	if ($no!=$page){
		echo "</a>";
	}
}

if($total_page > $end_page)
{
	$next_list = $end_page * $page_size;
	echo "<a href=$PHP_SELF?no=$next_list>">"</a><p>";
}
?>
	</font>
	</td>
</tr>
</table>
<a href=write.php>글쓰기</a>
</center>
</body>
</html>
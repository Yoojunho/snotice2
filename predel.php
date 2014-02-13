<!DOCTYPE >
<head>
	<meta charset ="utf-8">
	<title>스노티스 행사 입력</title>
<style>
<!--
td {font-size : 9pt;}
A:link {font : 9pt;color : black;text-decoration : none;
font-family: 굴림;font-size : 9pt;}
A:visited {text-decoration : none; color : black; font-size : 9pt;}
A:hover {text-decoration : underline; color : black; 
font-size : 9pt;}
-->
</style>
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>

<form action=del.php?id=<?=$id?> method=post>
<table width=300 border=0 cellpadding=2 cellspacing=1
bgcolor=#ff4444>
<tr>
	<td height=20 align=center bgcolor=#ff4444>
		<font color=white><B>비밀번호 확인</B></font>
	</td>
</tr>
<tr>
	<td align=center >
		<font color=white><B>비밀번호 : </b>
		<INPUT type=password name=pass size=8>
		<INPUT type=submit value="확인">
		<INPUT type=button value="취소" onclick="history.back(-1)">
	</td>
</tr>
</table>
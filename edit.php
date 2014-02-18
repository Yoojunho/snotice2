<!doctype html>
<head>
	<meta charset ="utf-8">
	<title>스노티스 행사 입력</title>
	<style>
		<!--
		td { font-size : 9pt; font-weight : bold; }
		A:link { font : 9pt; color : black; text-decoration : none;
		font-family : 굴림; font-size : 9pt; }
		A:visited { text-decoration : none; color : black; font-size : 9pt; }
		A:hover { text-decoration : underline; color : black;
		font-size : 9pt; }
		-->
	</style>
</head>

<body topmargin="50" leftmargin="0" text="#464646">
	<center>
		<form enctype="multipart/form-data" action=update.php?id=<?=$id?> method=post>
			<table width="800" border="0" cellpadding="5" cellspacing="3" bgcolor="#ff4444">
				<tr>
					<td height="20" align="center" bgcolor="#ff4444">
				    <font color=white><b>행사 입력 정보 수정</b></font>
				   </td>
				   </tr>
<?php
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

$result = mysql_query("select * from main where id = '$id'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_array($result);
?>				  
				<tr>
					<td bgcolor=white>&nbsp;
					<table>
						<tr>
							<td width="60" align="left" >행사 이름</td>
							<td align=left>
							<input type="text" name="eventname" placeholder="파문 정기 공연" required="required" size="20" maxlength="15" value="<?=$row[eventname]?>">
							</td>
						</tr>
						<tr>
							<td width="60" align="left">주최자</td>
							<td align="left" >
								<input type="text" name="hostname" placeholder="사범대 락밴드 파문" required="required" size="20" maxlength="25" value="<?=$row[hostname]?>" >
							</td>
						</tr>
						<tr>
							<td width="60" align="left">행사 장소</td>
							<td align="left" >
								<input type="text" name="eventp" placeholder="문화관 중강당" required="required" size="20" maxlength="25" value="<?=$row[eventp]?>" >
							</td>
						</tr>
						<tr>
							<td width="60" align="left">행사 시작일</td>
							<td align="letf">
								<input type="date" name="eventsdate" placeholder="2014-06-29" required="required" value="<?=$row[eventsdate]?>">
							</td>
						</tr>
						<tr>
							<td width="60" align="left">행사 종료일</td>
							<td align="letf">
								<input type="date" name="eventfdate" placeholder="2014-06-29" required="required" value="<?=$row[eventfdate]?>">
							</td>
						</tr>
						<tr>
							<td width="60" align="left">행사 시간</td>
							<td align="letf">
                            <input type="time" name="eventtime" required="required" value="<?=$row[eventtime]?>">     
							</td>
						</tr>	
						<tr>
							<td width="60" align="left">행사 종류</td>
							<td align="letf">
                          <select name="eventstyle" value="<?=$row[eventstyle]?>">
                                <option value="1">일일호프/장터</option>
                                <option value="2" selected="selected">공연</option>
                                <option value="3">강연</option>
                                <option value="4">모집</option>
                                <option value="5">기타</option>
                          </select>
							</td>
						</tr>	
						<tr>
							<td width="60" align="left">행사 소개</td>
							<td align="left" >
								<textarea name="eventpres" cols="65" rows="10"><?=$row[eventpres]?></textarea>
							</td>
						</tr>
						<tr>
								<td width="10" align="left">행사 포스터</td>
								<td align="left>">
								<input type="hidden" name="MAX_FILE_SIZE" value="3007680" />
                            <input type="file" name="image" value="<?=$row[image]?>">
							</td>
						</tr>
						<tr>
							<td colspan="10" align="center">
						    <input type="submit" value="저장하기">
						    &nbsp;&nbsp;
						    <input type="reset" value="다시쓰기">
						    &nbsp;&nbsp;
						    <input type="button" value="되돌아가기" onclick="history.back(-1)"
						  </td>
						</tr>
						<tr>
							<td width="60" align="left">비밀번호</td>
							<td align="left" >
								<input type="password" name="pass" size="8" maxlength="8">
								(비밀번호가 맞아야 수정가능)
							</td>
						</tr>
			       </table>	
				</td>
				</tr>   
			</table>
		</form>
	</center>
	</body>
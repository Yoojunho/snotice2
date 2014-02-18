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
		<form name="in" onsubmit="return FormCheck()" enctype="multipart/form-data" method="post" action="insert.php">
			<table width="800" border="0" cellpadding="5" cellspacing="3" bgcolor="#ff4444">
				<tr>
					<td height="20" align="center" bgcolor="#ff4444">
				    <font color=white><b>스노티스 행사 정보 입력</b></font>
				<tr>
					<td bgcolor=white>&nbsp;
					<table>
						<tr>
							<td width="60" align="left" >행사 이름</td>
							<td align=left>
							<input type="text" name=eventname placeholder="파문 정기 공연" required="required" size="20" maxlength="15">
							</td>
						</tr>
						<tr>
							<td width="60" align="left">주최자</td>
							<td align="left" >
								<input type="text" name=hostname placeholder="사범대 락밴드 파문" required="required" size="20" maxlength="25" >
							</td>
						<tr>
							<td width="60" align="left">행사 장소</td>
							<td align="left" >
								<input type="text" name=eventp placeholder="교내 아크로" required="required" size="20" maxlength="25" >
							</td>
						<tr>
							<td width="60" align="left">행사 시작일</td>
							<td align="letf">
								<input type="date" name=eventsdate placeholder="2014-06-29" required="required">
							</td>
						</tr>
						<tr>
							<td width="60" align="left">행사 종료일</td>
							<td align="letf">
								<input type="date" name=eventfdate placeholder="2014-06-29" required="required">
							</td>
						</tr>
						<tr>
							<td width="60" align="left">행사 시간</td>
							<td align="letf">
                            <input type="time" name=eventtime required>     
							</td>
						</tr>	
						<tr>
							<td width="60" align="left">행사 종류</td>
							<td align="letf">
                          <select name=eventstyle>
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
								<textarea name=eventpres cols="65" rows="10"></textarea>
							</td>
						</tr>
						<tr>
								<td width="10" align="left">행사 포스터</td>
								<td align="left>">
								<input type="hidden" name="MAX_FILE_SIZE" value="3007680" />
                            <input type="file" name=image />
							</td>
						</tr>
						<tr>
							<td width="60" align="left">비밀번호</td>
							<td align="left" >
								<input type="password" name=pass size="8" maxlength="8" >
						        (수정, 삭제시 반드시 필요)
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
			       </table>	
				</td>
				</tr>   
			</table>
			<script>
				function FormCheck() {
					if(!in.eventname.value)
					{
					 alert("행사 이름을 입력해주세요")
					 return false;	
					}
					 }
				function FormCheck() {
					if(!in.hostname.value)
					{
					 alert("주최자를 입력해주세요")
					 return false;	
					}
				function FormCheck() {
					if(!in.eventp.value)
					{
					 alert("행사 장소를 입력해주세요")
					 return false;	
					}	
					 }
			</script>
		</form>
	</center>
	</body>
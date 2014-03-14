<!doctype html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>스노티스 행사입력</title>
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
	<div align= "center">
	<form action="write.php" method=POST onsubmit="return formCheck()" enctype="multipart/form-data">
			<table width="800" border="0" cellpadding="5" cellspacing="3" bgcolor="#ff4444">
				<tr>
					<td height="20" align="center" bgcolor="#ff4444">
				    <font color=white><b>스노티스 사용자 확인</b></font>
				<tr>
					<td bgcolor=white>&nbsp;
					<table>
						<tr>
							<td width="60" align="left" >메일 주소</td>
							<td align=left>
							<input type="text" name=snumail size="20" maxlength="15">@snu.ac.kr
							</td>
						</tr>
						<tr>
							<td width="60" align="left" >작성자 이름</td>
							<td align=left>
							<input type="text" name=writer size="20" maxlength="15">
							</td>
						</tr>
						<tr>
							<td width="60" align="left">소속</td>
							<td align="left" >
								<input type="text" name=college size="20" maxlength="25" >
							</td>
						<tr>
							<td width="60" align="left">연락처</td>
							<td align="left" >
								<input type="text" name=phone size="20" maxlength="25" >
							</td>
						
						<tr>
							<td width="60" align="left">인증번호</td>
							<td align="left" >
								<input type="text" name=idnum size="20" maxlength="25" >
							</td>
						</tr>
						<tr>
							<td colspan="10" align="center">
						    <input type="submit" value="저장하기">
						    &nbsp;&nbsp;
						    <input type="button" value="되돌아가기" onclick="history.back(-1)"
						  </td>
						</tr>
			       </table>	
				</td>
				</tr>
      </form>
	<script>
	 function formCheck() 
	 {
	    var writer = document.forms[0].writer.value;
	    var college = document.forms[0].college.value;
	    var phone = document.forms[0].phone.value;
	    var idnum = document.forms[0].idnum.value;
	 if( writer == null || writer =="")
	 {
	    alert("작성자 이름을 입력해주세요");
	 document.forms[0].writer.focus();
	 return false;						
	 
	 }
	 	 if( college == null || college =="")
	 {
	    alert("소속 학과를 입력해주세요");
	 document.forms[0].college.focus();
	 return false;						
	 
	 }
	 	 if( phone == null || phone =="")
	 {
	    alert("연락처를 입력해주세요");
	 document.forms[0].phone.focus();
	 return false;						
	 
	 }
	 if( idnum == null || idnum =="")
	 {
	    alert("인증 번호를 입력해주세요");
	 document.forms[0].idnum.focus();
	 return false;						
	 
	 }
	    alert("사용자 정보가 등록되었습니다");
	    return true;
	    
	   }
  </script>
  </div>
</body>
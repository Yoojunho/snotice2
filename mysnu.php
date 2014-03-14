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
	<form action="login.php" method=POST onsubmit="return formCheck()" enctype="multipart/form-data">
			<table width="800" border="0" cellpadding="5" cellspacing="3" bgcolor="#ff4444">
				<tr>
					<td height="20" align="center" bgcolor="#ff4444">
				    <font color=white><b>스노티스 메일 인증코드 발송</b></font>
				<tr>
					<td bgcolor=white>&nbsp;
					<table>
						<tr>
							<td width="150" align="left" >mysnu 이메일</td>
							<td align="left">
							<input type="text" name=snumail size="20" maxlength="15">
							@snu.ac.kr</td>
							<td align="right">
						    <input type="submit" value="인증번호 발송하기"></td>
						</tr>    
</table>
</form>
<script>
	 function formCheck() 
	 {
	    var snumail = document.forms[0].snumail.value;

	 if( snumail == null || snumail =="")
	 {
	    alert("snu 메일을 입력해주세요");
	 document.forms[0].snumail.focus();
	 return false;						
	 
	 }
	    alert("이메일로 인증 번호가 발송 되었습니다");
	    return true;
	    
	   }
  </script>
</body>
	
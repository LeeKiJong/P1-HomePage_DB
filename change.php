<?php
	require_once("./dbconfig.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Battle Ground Community</title>
	<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	
</head>
<body>
					
					
		<h3>정보 수정</h3>
		<div>
		
		<form action="./info_change.php" method="post">
		   <table>
				<tbody>
						<tr>
							<th scope="row"><label for="ID">아이디</label></th>
							<td class="ID"><input type="text" name="ID" id="ID" value="<?php echo isset($row['ID'])?$row['ID']:null?>"></td>

						</tr>
						<tr>
							<th scope="row"><label for="password">비밀번호</label></th>
							<td class="password"><input type="password" name="password" id="password" value="<?php echo isset($row['password'])?$row['password']:null?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="password2">비밀번호 확인</label></th>
							<td class="password2"><input type="password" name="password2" id="password2" value="<?php echo isset($row['password2'])?$row['password2']:null?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="nickname">닉네임</label></th>
							<td class="nickname"><input type="text" name="nickname" id="nickname" value="<?php echo isset($row['nickname'])?$row['nickname']:null?>"></td>
						</tr>
					</tbody>
				</table>
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">
						<?php echo '정보수정 신청'?>
					</button>
					
				</div>
		</form>
				
		</div>
		<form action="./main.html" method="post">
			<div class="btnSet">
					<button type="submit" class="btnSubmit btn">
					<?php echo '메인화면으로 돌아가기'?>
				</button>
			</div>
		</form>
</body>
</html>
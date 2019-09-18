<?php
	require_once("./dbconfig.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Battle Ground Community</title>
	<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	
</head>
<body>
					
					
		<h3>탈퇴 화면</h3>
		<div>
		
		<form action="./member_leave.php" method="post">
		   <table>
				<tbody>
						<tr>
							<th scope="row"><label for="password">비밀번호</label></th>
							<td class="password"><input type="password" name="password" id="password" value="<?php echo isset($row['password'])?$row['password']:null?>"></td>
						</tr>
					</tbody>
				</table>
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">
						<?php echo '탈퇴 신청'?>
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
<?php
	require_once("./dbconfig.php");
	
	$sql = 'select * from user';
	$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
	$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Battle Ground Sign Up</title>
	<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	
</head>
<body>
					
		<article id="contact">
		<h3>Battle Ground Sign Up</h3>
		
		<form action="./register_update.php" method="post">
		
		<div class="field half first">
										<label for="ID">ID</label>
										<input type="text" name="ID" id="ID" />
									</div>
									
									<div class="field half second">
										<label for="password">Password</label>
										<input type="password" name="password" id="password" />
									</div>
									<div class="field half first">
										<label for="nickname">Nickname</label>
										<input type="text" name="nickname" id="nickname" />
									</div>
									<div class="field half second">
										<label for="password2">Password OK</label>
										<input type="password" name="password2" id="password2" />
									</div>
									
									
									
										<div class="btnSet">
										<button type="submit" class="btnSubmit btn">
											<?php echo 'Sign Up'?>
										</button>
									</div>
		
									
									
		  
		</form>
		<form action="./main.html" method="post">
			<div class="btnSet">
					<button type="submit" class="btnSubmit btn">
					<?php echo '메인화면으로 돌아가기'?>
				</button>
			</div>
		</form>
		</article>
		
		
	
</body>
</html>
<?php

	require_once("./dbconfig.php");
	?>

<!DOCTYPE html>
 <html> 
 <head> 
 <meta charset="utf-8" />
  <title>Battle Ground Weapon</title>
	<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
 <style> 
		  #press1{ 
				display:block; 
				border : 2px solid;
				text-align : center;
			}  
			#press2{ 
				display:none; 
				border : 2px solid ;
				text-align : center;
			}  
			#press12{ 
				display:block; 
				border : 2px solid;
				text-align : center;
			}  
			#press13{ 
				display:none; 
				border : 2px solid;
				text-align : center;
			}  
			#arview{ 
				display:none; 
				border : 2px solid;
			}  
			#srview{ 
				display:none; 
				border : 2px solid;
			}  
 </style> 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
 </head>
 <body>
<article id="contact">
	<h2 class="major">무기등록</h2>
		<form method="post" action="./Arweapon.php">
				<label for="NAME">name</label>
					<input type="text" name="name" id="name" />
				<label for="password">Password</label>
					<input type="text" name="password" id="password" />
				<button type="submit" class="btnSubmit btn">
					<?php echo 'Ar무기 등록'?>
				</button>
		</form>
		<form action="./Srweapon.php" method="post">
			<div class="btnSet">
				<button type="submit" class="btnSubmit btn">
					<?php echo 'Sr무기 등록'?>
				</button>
			</div>
		</form>
</article>
</body>
</html>
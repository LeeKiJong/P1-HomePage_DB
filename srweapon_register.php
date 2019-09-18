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
		<form method="post" action="./srweapon.php">
				<label for="name">name</label>
					<input type="text" name="name" id="name" />
				<label for="image">image</label>
					<input type="text" name="image" id="image" />
				<label for="charging_number">charging_number</label>
					<input type="text" name="charging_number" id="charging_number" />
				<label for="use_ammo">use_ammo</label>
					<input type="text" name="use_ammo" id="use_ammo" />
				<label for="shoot_mode">shoot_mode</label>
					<input type="text" name="shoot_mode" id="shoot_mode" />
				<label for="appear_map">appear_map</label>
					<input type="text" name="appear_map" id="appear_map" />
				<button type="submit" class="btnSubmit btn">
					<?php echo '무기 등록'?>
				</button>
		</form>
</article>
</body>
</html>
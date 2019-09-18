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
 <h1>Battle Ground Weapon</h1> 
 <div id="press1">누르면 ar 무기 정보가 나옵니다.</div> &nbsp;
 <div id="press2">누르면 ar 무기 정보가 들어갑니다.</div> &nbsp;
 

 <div id="arview">
 <table>
 <thead>
					<tr>
					<th scope="col" class="image">무기사진</th>
					<th scope="col" class="name">무기이름</th>
						
						<th scope="col" class="charging_number">장전 수</th>
						<th scope="col" class="use_ammo">사용 총알</th>
						<th scope="col" class="shoot_mode">사격 모드</th>
						<th scope="col" class="appear_map">출현 지역</th>
						<!--<th scope="col" class="review">사용후기</th>-->
					</tr>
				</thead>
				<tbody>
						<?php
						$sql = 'select * from Arweapon_info';
						$result =  mysqli_query($db, $sql)
						or die('Error Querying database.'); 
						
							while($row = $result->fetch_assoc())
							{
						?>
						<tr>
						<td class="image"><img src="<?php echo $row['image'] ?>" width="50" height="50"></td>
							<td class="name"><?php echo $row['name']?></td>
							
							<td class="charging_number"><?php echo $row['charging_number']?></td>
							<td class="use_ammo"><?php echo $row['use_ammo']?></td>
							<td class="shoot_mode"><?php echo $row['shoot_mode']?></td>
							<td class="appear_map"><?php echo $row['appear_map']?></td>
							<!--<td class="review"><?php echo $row['review']?>&nbsp;</td>-->
						</tr>
						<?php
							}
						?>
				</tbody>
				</table>
				
		</div>
		&nbsp;
		
<div id="press12">누르면 sr 무기 정보가 나옵니다.</div> &nbsp;
 <div id="press13">누르면 sr 무기 정보가 들어갑니다.</div> &nbsp;
		 <div id="srview">
		
 <table>
 <thead>
 
					<tr>
					<th scope="col" class="image">무기사진</th>
					<th scope="col" class="name">무기이름</th>
						
						<th scope="col" class="charging_number">장전 수</th>
						<th scope="col" class="use_ammo">사용 총알</th>
						<th scope="col" class="shoot_mode">사격 모드</th>
						<th scope="col" class="appear_map">출현 지역</th>
						<!--<th scope="col" class="review">사용후기</th>-->
					</tr>
				</thead>
				<tbody>
						<?php
						$sql = 'select * from Srweapon_info';
						$result =  mysqli_query($db, $sql)
						or die('Error Querying database.'); 
						
							while($row = $result->fetch_assoc())
							{
						?>
						<tr>
						<td class="image"><img src="<?php echo $row['image'] ?>" width="50" height="50"></td>
							<td class="name"><?php echo $row['name']?></td>
							
							<td class="charging_number"><?php echo $row['charging_number']?></td>
							<td class="use_ammo"><?php echo $row['use_ammo']?></td>
							<td class="shoot_mode"><?php echo $row['shoot_mode']?></td>
							<td class="appear_map"><?php echo $row['appear_map']?></td>
							<!--<td class="review"><?php echo $row['review']?>&nbsp;</td>-->
						</tr>
						<?php
							}
						?>
				</tbody>
				</table>
		</div>
		&nbsp;
		
	<form method="post" action="./arweapon_register.php">
		<button type="submit" class="btnSubmit btn">
					<?php echo 'Ar무기 등록'?>
		</button>
	</form>
	<form method="post" action="./srweapon_register.php">
		<button type="submit" class="btnSubmit btn">
					<?php echo 'Sr무기 등록'?>
		</button>
	</form>


										
 <script>  
$(document).ready(function() {   
			$("#press1").click(function() { 
				$("#press1").hide();  
				$("#press2").show(); 	
				$("#arview").show();				
 
			}); 
			$("#press2").click(function(){
				$("#press1").show();
				$("#press2").hide();   
				$("#arview").hide();
			});
			$("#press12").click(function(){
				$("#press12").hide();
				$("#press13").show();
$("#srview").show();				
			});
			$("#press13").click(function(){
				$("#press12").show();
				$("#press13").hide(); 
				$("#srview").hide();				
			});
			
			
			}); 
 </script>

	
 </body>
 </html> 
 
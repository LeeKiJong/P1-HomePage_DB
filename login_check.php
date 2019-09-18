<?php
	session_start();
	require_once("./dbconfig.php");
	
	

	$ID = $_POST['ID'];
	$password = $_POST['password'];
	
	$sql = 'select ID, password, nickname from user';
	$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
	$msg = '로그인 실패';
	$URL='./main.html';
	$check=1;
	if(mysqli_num_rows($result)){  
	while($row=mysqli_fetch_assoc($result)){   
	if($row['ID']==$ID){
		if(base64_decode($row['password'])==$password){
			$msg = '로그인 성공';
			$URL='./main.html';

			setcookie('nickname', $row['nickname'], time()+(60*60));
			setcookie('loginok', 1, time()+(60*60));
			$check=0;
			?>
				<script>
				$(document).ready(function(){
					$(document).hide();
				});
				</script>
		

			<?php 

		}
	}
	
		
	} 
	}	
	
?>
<head>
<meta charset="utf-8" />
</head>
<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $URL?>");
</script>
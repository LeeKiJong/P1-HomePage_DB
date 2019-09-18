<head>
<meta charset="utf-8" />
</head>
<?php
	require_once("./dbconfig.php");
	
	$password = $_POST['password'];
	
	$msg = '비밀번호가 틀렸습니다.';
	$URL='./main.html';
	
		$sql = 'select * from user';
	$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
				
	if(mysqli_num_rows($result)){  
	while($row=mysqli_fetch_assoc($result)){   
	if($row['nickname']==$_COOKIE['nickname']){
		

		
		if(base64_decode($row['password'])==$password) {
			$sql2 = 'delete from user where nickname=("' . $_COOKIE['nickname'] . '")';
			$result2 = mysqli_query($db, $sql2)  
				or die('Error Querying database.');
				

		$sql4 = 'delete from board_free where b_id=("' . $_COOKIE['nickname'] . '")';
		$result4 = mysqli_query($db, $sql4)  
			or die('Error Querying database.');
		

		$sql4 = 'delete from comment_free where co_id=("' . $_COOKIE['nickname'] . '")';
		$result4 = mysqli_query($db, $sql4)  
			or die('Error Querying database.'); 
		
		
		
		
		
				
			$msg = '정상적으로 탈퇴처리 되었습니다.';
			$URL='./main.html';
			$check=1;
		} 

	
	
	}	
	} 
	}	
	
	if($check==1){
		setcookie('nickname', $row['nickname'], time()-(60*60));
	}		
?>
<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $URL?>");
</script>
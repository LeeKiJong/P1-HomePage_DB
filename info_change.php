<?php
	session_start();
	require_once("./dbconfig.php");
	
	

	$ID = $_POST['ID'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$nickname = $_POST['nickname'];
	
	$sql = 'select * from user';
	$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
	
	if($password==$password2){
	if(mysqli_num_rows($result)){  
	while($row=mysqli_fetch_assoc($result)){   
	if($row['nickname']==$_COOKIE['nickname']){
		
		$sql2 = 'update user set ID=("' . $ID . '"), password=("' . base64_encode($password).'"), nickname=("'.$nickname.'") where nickname =("'.$_COOKIE['nickname'].'")';
		$result2 = mysqli_query($db, $sql2)  
				or die('Error Querying database.'); 
		
				
		$msg = '회원 정보가 변경되었습니다.';
		$URL='./main.html';
				
		$sql4 = 'update board_free set b_id = ("' . $nickname.'") where b_id=("'.$_COOKIE['nickname'].'")';
		$result4 = mysqli_query($db, $sql4)  
			or die('Error Querying database.');
		

		$sql4 = 'update comment_free set co_id = ("' . $nickname.'") where co_id=("'.$_COOKIE['nickname'].'")';
		$result4 = mysqli_query($db, $sql4)  
			or die('Error Querying database.'); 

		
		
		
		setcookie('nickname', $nickname, time()+(60*60));
	
	
	}	
	} 
	}	
	}
	else{
		$msg = '회원 정보 변경 실패! 다시 입력해주세요.';
		$URL='./main.html';
	}
	
?>
<head>
<meta charset="utf-8" />
</head>

<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $URL?>");

</script>
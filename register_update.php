<?php
	require_once("./dbconfig.php");

	

	$ID = $_POST['ID'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$nickname = $_POST['nickname'];

	
if($password!=$password2) {
	$msg = '비밀번호가 달라요 다시 입력해주세요ㅠㅠ';
	$URL='./register.php';

	

} else {
	
	$sql = 'select ID, nickname from user';
	$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
	$check=1;
	if(mysqli_num_rows($result)){  
	while($row=mysqli_fetch_assoc($result)){   
	if($row['ID']==$ID){
		$msg = 'ID 중복이에요 다시 입력해주세요';
		$URL='./register.php';
		$check=0;
	}
	
	else if($row['nickname']==$nickname){
		$msg = '닉네임 중복이에요 다시 입력해주세요';
		$URL='./register.php';
		$check=0;
	}
		
	} 
	}	
	
	
	if($check){
		$msg = '회원가입이 완료되었어요!! 어서 로그인 하세요!';
	$URL='./main.html';
	
	
	$sql = 'insert into user (ID, password, nickname) values("' . $ID . '", "' . base64_encode($password) . '", "' . $nickname . '")';
	$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
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
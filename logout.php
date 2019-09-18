<?php
	session_start();
	setcookie('loginok', 0, time()+(60*60));
	setcookie('nickname', $row['nickname'], time()-(60*60));
	$msg = '로그아웃 되셨습니다!';
	$URL='./main.html';
?>
<head>
<meta charset="utf-8" />
</head>
<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $URL?>");
</script>
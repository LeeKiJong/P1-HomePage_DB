<?php
	require_once('./dbconfig.php');
	
	$w = '';
	$coNo = 'null';

	if(isset($_POST['w'])) {
		$w = $_POST['w'];
		$coNo = $_POST['co_no'];
	}
	
	$bNo = $_POST['bno'];

	if($w !== 'd') {
		$coContent = $_POST['coContent'];
		if($w !== 'u') {
			$coId = $_COOKIE['nickname'];
		}
	}

	if(empty($w) || $w === 'w') { 
		$msg = '작성';
		$sql = 'insert into comment_free values(null, ' .$bNo . ', ' . $coNo . ', "' . $coContent . '", "' . $coId . '")';

		if(empty($w)) { 
			$result = $db->query($sql);			
			$coNo = $db->insert_id;
			$sql = 'update comment_free set co_order = co_no where co_no = ' . $coNo;
		}		

	} else if($w === 'u') {
		$msg = '수정';
		$sql = 'select count(*) as cnt from comment_free where co_id='.$_COOKIE['nickname'].' and co_no = ' . $coNo;
		$result = $db->query($sql);
		$row = $result->fetch_assoc();		
		if(empty($row['cnt'])) {
?>
			<script>
				alert('비밀번호가 맞지 않습니다.');
				history.back();
			</script>
<?php 
			exit;	
		}		
		$sql = 'update comment_free set co_content = "' . $coContent . '" where co_id=' .$_COOKIE['nickname'].'and co_no = ' . $coNo;
	} else if($w === 'd') {
		$msg = '삭제';
		$sql = 'select count(*) as cnt from comment_free where co_id=' .$_COOKIE['nickname'].' and co_no = ' . $coNo;
		$result = $db->query($sql);
		$row = $result->fetch_assoc();		
		if(empty($row['cnt'])) {
?>
			<script>
				alert('비밀번호가 맞지 않습니다.');
				history.back();
			</script>
<?php 
			exit;	
		}
		$sql = 'delete from comment_free where co_id=' .$_COOKIE['nickname'].' and co_no = ' . $coNo;
	} else {
?>
		<script>
			alert('정상적인 경로를 이용해주세요.');
			history.back();
		</script>
<?php 
		exit;
	}
	$result = $db->query($sql);
	if($result) {
?>
		<script>
			alert('댓글이 정상적으로 <?php echo $msg?>되었습니다.');
			location.replace("./view.php?bno=<?php echo $bNo?>");
		</script>
<?php
	} else {
?>
		<script>
			alert('댓글 <?php echo $msg?>에 실패했습니다.');
			history.back();
		</script>
<?php
		exit;
	}
?>

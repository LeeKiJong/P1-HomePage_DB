<head>
<meta charset="utf-8" />
</head>
<?php
	require_once("./dbconfig.php");

	if(isset($_POST['bno'])) {
		$bNo = $_POST['bno'];
	}

	if(empty($bNo)) {
		$bID = $_COOKIE['nickname'];
		$date = date('Y-m-d H:i:s');
	}

	$bTitle = $_POST['bTitle'];
	$bContent = $_POST['bContent'];


if(isset($bNo)) {
	$sql = 'select count(b_id) as cnt from board_free where b_id=("' . $_COOKIE['nickname'] . '") and b_no = ' . $bNo;
	$result = mysqli_query($db, $sql)   
				or die('Error Querying database.'); 
	$row = $result->fetch_assoc();
	
	if($row['cnt']) {
		$sql = 'update board_free set b_title="' . $bTitle . '", b_content="' . $bContent . '" where b_id=("' . $_COOKIE['nickname'] . '") and b_no = ' . $bNo;
		$msgState = '수정';
	} else {
		$msg = '권한이 없습니다..';
	?>

		<script>
			alert("<?php echo $msg?>");
			history.back();
		</script>
	<?php
		exit;
	}
	
} else {
	$sql = 'insert into board_free (b_no, b_title, b_content, b_date, b_hit, b_id) values(null, "' . $bTitle . '", "' . $bContent . '", "' . $date . '", 0, "' . $bID . '")';
	$msgState = '등록';
}

if(empty($msg)) {
	 $result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
	
	if($result) {
		$msg = '정상적으로 글이 ' . $msgState . '되었습니다.';
		if(empty($bNo)) {
			$bNo = $db->insert_id;
		}
		$replaceURL = './view.php?bno=' . $bNo;
	} else {
		$msg = '글을 ' . $msgState . '하지 못했습니다.';
?>
		<script>
			alert("<?php echo $msg?>");
			history.back();
		</script>
<?php
		exit;
	}
}

?>

<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $replaceURL?>");
</script>
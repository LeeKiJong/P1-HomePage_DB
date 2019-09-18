<head>
<meta charset="utf-8" />
</head>
<?php
	require_once("./dbconfig.php");

	if(isset($_POST['bno'])) {
		$bNo = $_POST['bno'];
	}


if(isset($bNo)) {
	$sql = 'select count(b_id) as cnt from board_free where b_id=("' . $_COOKIE['nickname'] . '") and b_no = ' . $bNo;
	$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
	$row = $result->fetch_assoc();
	
	if($row['cnt']) {
		$sql = 'delete from board_free where b_no = ' . $bNo;
	
	} else {
		$msg = '권한이 없습니다.';
	?>
		<script>
			alert("<?php echo $msg?>");
			history.back();
		</script>
	<?php
		exit;
	}
}

	$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
	
if($result) {
	$msg = '정상적으로 글이 삭제되었습니다.';
} else {
	$msg = '글을 삭제하지 못했습니다.';
?>
	<script>
		alert("<?php echo $msg?>");
		history.back();
	</script>
<?php
	exit;
}


?>
<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo './index.php'?>");
</script>
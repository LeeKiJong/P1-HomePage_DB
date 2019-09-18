<?php
	require_once("./dbconfig.php");
	$bNo = $_GET['bno'];
	if(!empty($bNo) && empty($_COOKIE['board_free_' . $bNo])) {
		$sql = 'update board_free set b_hit = b_hit + 1 where b_no = ' . $bNo;
		$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
		if(empty($result)) {
			?>
			<script>
				alert('오류가 발생했습니다.');
				history.back();
			</script>
			<?php 
		} else {
			setcookie('board_free_' . $bNo, TRUE, time() + (60 * 60 * 24), '/');
		}
	}
	
	$sql = 'select b_title, b_content, b_date, b_hit, b_id from board_free where b_no = ' . $bNo;
	$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
	$row = $result->fetch_assoc();
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Battle Ground Community</title>
	<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

</head>
<body>
	<article class="boardArticle">
		<div id="boardView">
			<h1 id="boardTitle"><?php echo $row['b_title']?></h1>
			<div id="boardInfo">
				<span id="boardID">작성자: <?php echo $row['b_id']?></span>
				<span id="boardDate">작성일: <?php echo $row['b_date']?></span>
				<span id="boardHit">조회: <?php echo $row['b_hit']?></span>
			</div>
			<div id="boardContent"><?php echo $row['b_content']?></div>
			<div class="btnSet">
				<a href="./write.php?bno=<?php echo $bNo?>">수정</a>
				<a href="./delete.php?bno=<?php echo $bNo?>">삭제</a>
			</div>
			<div id="boardComment">
				<?php require_once('./comment_view.php')?>
			</div>
		</div>

	</article>
	
		
	<form action="./index.php" method="post">
			<div class="btnSet">
					<button type="submit" class="btnSubmit btn">
					<?php echo '목록으로 돌아가기'?>
				</button>
			</div>
		</form>

</body>
</html>
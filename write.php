<?php
	require_once("./dbconfig.php");
	
	//$_GET['bno']이 있을 때만 $bno 선언
	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
	}
		 
	if(isset($bNo)) {
		$sql = 'select b_title, b_content, b_id from board_free where b_no = ' . $bNo;
		$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
		$row = $result->fetch_assoc();
	}
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
		<h1>자유게시판 글쓰기</h1>
		<div id="boardWrite">
			<form action="./write_update.php" method="post">
				<?php
				if(isset($bNo)) {
					echo '<input type="hidden" name="bno" value="' . $bNo . '">';
				}
				?>
				<table id="boardWrite">
					<caption class="readHide">자유게시판 글쓰기</caption>
					<tbody>
						<tr>
							<th scope="row"><label for="bTitle">제목</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle" value="<?php echo isset($row['b_title'])?$row['b_title']:null?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">내용</label></th>
							<td class="content"><textarea name="bContent" id="bContent"><?php echo isset($row['b_content'])?$row['b_content']:null?></textarea></td>
						</tr>
					</tbody>
				</table>
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">
						<?php echo isset($bNo)?'수정':'작성'?>
					</button>
					
				</div>
			</form>
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
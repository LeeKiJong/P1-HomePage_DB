<?php
	require_once("./dbconfig.php");

	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
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
	<style>   
				

h3{  
				font-size:50px; 
				color:white; 
			}	
          
		  </style>
</head>
<body>
	<article class="boardArticle">
		<h3>자유게시판 글삭제</h3>
		<?php
			if(isset($bNo)) {
				$sql = 'select count(b_no) as cnt from board_free where b_no = ' . $bNo;
				$result = mysqli_query($db, $sql)  
						or die('Error Querying database.');
				$row = $result->fetch_assoc();
				if(empty($row['cnt'])) {
		?>
		<script>
			alert('글이 존재하지 않습니다.');
			history.back();
		</script>
		<?php
			exit;
				}
				
				$sql = 'select b_title from board_free where b_no = ' . $bNo;
				$result = mysqli_query($db, $sql)  
				or die('Error Querying database.'); 
				$row = $result->fetch_assoc();
		?>
		<div id="boardDelete">
			<form action="./delete_update.php" method="post">
				<input type="hidden" name="bno" value="<?php echo $bNo?>">
				<table>
					<caption class="readHide">자유게시판 글삭제</caption>
					<thead>
						<tr>
							<th scope="col" colspan="2">글삭제</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">글 제목</th>
							<td><?php echo $row['b_title']?></td>
						</tr>
					</tbody>
				</table>

				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">삭제</button>
					<a href="./index.php" class="btnList btn">목록으로 돌아가기</a>
				</div>
			</form>
		</div>
	<?php
		} else {
	?>
		<script>
			alert('정상적인 경로를 이용해주세요.');
			history.back();
		</script>
	<?php
			exit;
		}
	?>
	</article>
</body>
</html>
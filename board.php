<?php 
	require_once("./dbconfig.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Battle Ground Community</title>
</head>
<body>
	<article class="boardArticle">
	<h3>Battle Ground Community</h3>
	<table>
		<caption class="readHide">Battle Ground Community</caption>
		<thead>

				<tr>

					<th scope="col" class="no">번호</th>

					<th scope="col" class="title">제목</th>

					<th scope="col" class="author">작성자</th>

					<th scope="col" class="date">작성일</th>

					<th scope="col" class="hit">조회</th>

				</tr>

			</thead>

			<tbody>

					<?php

						$sql = 'select * from board_free order by no desc';

						$result = mysqli_query($db, $sql)  
							or die('Error Querying database.'); 

						while($row = $result->fetch_assoc())

						{
							$datetime = explode(' ', $row['date']);

							$date = $datetime[0];

							$time = $datetime[1];

							if($date == Date('Y-m-d'))

								$row['date'] = $time;

							else

								$row['date'] = $date;

					?>

				<tr>

					<td class="no"><?php echo $row['no']?></td>

					<td class="title"><?php echo $row['title']?></td>

					<td class="author"><?php echo $row['id']?></td>

					<td class="date"><?php echo $row['date']?></td>

					<td class="hit"><?php echo $row['hit']?></td>

				</tr>

					<?php

						}
?>

			</tbody>

		</table>
		<div class="btnSet">
				<a href="./write.php" class="btnWrite btn">글쓰기</a>
			</div>
	</article>

</body>
</html>
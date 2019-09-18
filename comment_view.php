<?php
	$sql = 'select * from comment_free where co_no=co_order and b_no=' . $bNo;
	$result = $db->query($sql);
?>
<div id="commentView">
	<?php
		while($row = $result->fetch_assoc()) {
	?>
	<ul class="oneDepth">
		<li>
			<div>
				<span>작성자: <?php echo $row['co_id']?></span>
				<p><?php echo $row['co_content']?></p>
			</div>
			<?php
				$sql2 = 'select * from comment_free where co_no!=co_order and co_order=' . $row['co_no'];
				$result2 = $db->query($sql2);
			
				while($row2 = $result2->fetch_assoc()) {
			?>
			<ul class="twoDepth">
				<li>
					<div>
						<span>작성자: <?php echo $row2['co_id']?></span>
						<p><?php echo $row2['co_content'] ?></p>
					</div>
				</li>
			</ul>
			<?php
				}
			?>
		</li>
	</ul>
	<?php } ?>
</div>
<form action="comment_update.php" method="post">
	<input type="hidden" name="bno" value="<?php echo $bNo?>">
	<table>
		<tbody>
			<tr>
				<th scope="row"><label for="coContent">내용</label></th>
				<td><textarea name="coContent" id="coContent"></textarea></td>
			</tr>
		</tbody>
	</table>
	<div class="btnSet">
		<input type="submit" value="코멘트 작성">
	</div>
</form>
	
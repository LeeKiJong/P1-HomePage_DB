<?php
	require_once("./dbconfig.php");

	

	//항상 변수 선언
	$name = $_POST['name'];
	$image = $_POST['image'];
	$charging_number = $_POST['charging_number'];
	$use_ammo = $_POST['use_ammo'];
	$shoot_mode = $_POST['shoot_mode'];
	$appear_map = $_POST['appear_map'];
	
	$sql = 'insert into Srweapon_info (name, image, charging_number,use_ammo , shoot_mode, appear_map) 
	values("' . $name . '", "' . $image . '", "' . $charging_number . '","'. $use_ammo .'", "' . $shoot_mode . '", "' . $appear_map . '")';

	$result = $db->query($sql);

	$row = $result->fetch_assoc();
		
		
?>
<script>
	alert("<?php echo '무기가 등록되었습니다.'?>");
	location.replace("<?php echo ./weapon.php ?>");
</script>
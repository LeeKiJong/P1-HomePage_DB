<?php 

  require_once("./dbconfig.php");
  
  $query = "select * from word";  
  $result = mysqli_query($db, $query) 
  or die('Error Querying database.');  
  
  $json = array();  
  
  if(mysqli_num_rows($result)){ 
	while($row=mysqli_fetch_assoc($result)){  
		if($row['type']=="총기 부착물"){
			$json['equip'][]= $row; 
		}
		else if($row['type']=="회복 아이템"){
			$json['heal'][]= $row; 
		}
		else if($row['type']=="방어구"){
			$json['protect'][]= $row; 
		}
		else if($row['type']=="차량"){
			$json['car'][]= $row; 
		}
		else{
			$json['etc'][]= $row; 
		} 
  } 
   mysqli_free_result($result); 
   } 
  echo json_encode($json);         
  mysqli_close($db); 
?> 
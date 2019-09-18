<!DOCTYPE html> 
<html> 
	<head>
		<meta charset="UTF-8"/> 
		<title>Battle Ground Word</title>
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
	</head>
	<body> 
	<h1>Battle Ground Word</h1> 
	
    <button id="word1">총기 부착물</button>
	<button id="word2">회복 아이템</button>
	<button id="word3">방어구</button>
	<button id="word4">차량</button>
	<button id="word5">기타</button>
	&nbsp;
	<div id="q"><ul><li>용어 - 공식명칭</li></ul></div>
	<div id="result"><ul><li>알고싶은 단어의 카테고리 버튼을 누르세요.</li></ul></div>
						
						
						
	<script>
		$(document).ready(function() { 
		
		$("#word1").click(function() {   
			$.getJSON("selectword.php",function(json) {  
				$("#result ul").empty();     
				$.each(json.equip, function() {  
					var name = '<li>' + this["name"] + ' - ' + this["info"] + '</li>';
					$("#result ul").append(name);
					
				});   
			});  
		}); 
		$("#word2").click(function() {   
			$.getJSON("selectword.php",function(json) {  
				$("#result ul").empty();     
				$.each(json.heal, function() {  
					var name = '<li>' + this["name"] + ' - ' + this["info"] + '</li>';
					$("#result ul").append(name);
					
				});   
			});  
		});
		$("#word3").click(function() {   
			$.getJSON("selectword.php",function(json) {  
				$("#result ul").empty();     
				$.each(json.protect, function() {  
					var name = '<li>' + this["name"] + ' - ' + this["info"] + '</li>';
					$("#result ul").append(name);
					
				});   
			});  
		});
		$("#word4").click(function() {   
			$.getJSON("selectword.php",function(json) {  
				$("#result ul").empty();     
				$.each(json.car, function() {  
					var name = '<li>' + this["name"] + ' - ' + this["info"] + '</li>';
					$("#result ul").append(name);
					
				});   
			});  
		});
		$("#word5").click(function() {   
			$.getJSON("selectword.php",function(json) {  
				$("#result ul").empty();     
				$.each(json.etc, function() {  
					var name = '<li>' + this["name"] + ' - ' + this["info"] + '</li>';
					$("#result ul").append(name); 
					
				});   
			});  
		});
		
		});
	</script>
	
	<!--<h3>총기 부착물</h3> 
	<table id="option">
	<tr>
	<th>용어</th>
	<th>공식명칭</th>
	</tr>
	<tr>
	<td>2배</td>
	<td>2배율 스코프</td>
	
	</tr>
	</table>
	<tr>
	
	<h3>회복 아이템</h3>
	<table id="heal">
	<tr>
	<th>용어</th>
	<th>공식명칭</th>
	</tr>	
	<td>구상/식빵</td>
	<td>구급 상자</td>
	</tr>
	<tr>
	<td>드링크</td>
	<td>에너지 드링크</td>
	</tr>
	<tr>
	<td>키트/의료킷</td>
	<td>의료용 키트</td>
	</tr>
	</table>
	
	<h3>방어구</h3>
	<table id="guard">	
	<tr>
	<th>용어</th>
	<th>공식명칭</th>
	</tr>
	<tr>
	<td>뚝배기(뚝)</td>
	<td>헬맷</td>
	</tr>
	<tr>
	<td>조끼/갑빠</td>
	<td>방탄 조끼</td>
	</tr>
	<tr>
	<td>길리</td>
	<td>길리 슈트</td>
	</tr>
	</table>
	
	<h3>차량</h3> 
	<table id="car">	
	<tr>
	<th>용어</th>
	<th>공식명칭</th>
	</tr>
	<tr>
	<td>아토바이/적토마</td>
	<td>오토바이</td>
	</tr>
	</table>
	
	<h3>etc/play</h3> 
	<table id="etc">
	<tr>
	<th>용어</th>
	<th>설명</th>
	</tr>
	<tr>
	<td>고라니/노루</td>
	<td>도로에 뛰어다니는 플레이어</td>
	
	</tr>
	</table>-->

	
	
	
	
	
	
	
</body>
</html>
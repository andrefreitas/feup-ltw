<?php
	$db = new PDO('sqlite:noticias.db');
	$result = $db->query('SELECT * FROM news');
		foreach($result as $row){
			$r['news'][]= $row; 
	}
	echo json_encode($r);
?>

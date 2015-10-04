<?php 
	$db = new PDO('sqlite:noticias.db');
	$result = $db->query('SELECT * FROM news');
	echo "<news>\n";
	foreach($result as $row){
		echo "\t<new>\n";
		
		echo "\t\t<id>";
			echo $row[id];
		echo "</id>\n";

		echo "\t\t<title>";
			echo $row[title];
		echo "</title>\n";
		
		echo "\t\t<intro>";
			echo $row[introduction];
		echo "</intro>\n";
		
		echo "\t\t<text>";
			echo $row[fulltext];
		echo "</text>\n";
		
		echo "\t</new>\n";
	
	}
	echo '</news>';
?>
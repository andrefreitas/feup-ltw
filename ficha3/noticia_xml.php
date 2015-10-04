<?php 
	$db = new PDO('sqlite:noticias.db');
	$noticia = $db->prepare('SELECT * FROM news where id=:id');
	$noticia->bindParam(':id',$_GET['id'],PDO::PARAM_INT);
	$noticia->execute();
	$noticia=$noticia->fetch(PDO::FETCH_ASSOC);
	
	if(isset($_GET['id']) && isset($noticia['id']) ){
		echo "<new>\n";
		
		echo "\t<id>";
			echo $noticia[id];
		echo "</id>\n";

		echo "\t<title>";
			echo $noticia[title];
		echo "</title>\n";
		
		echo "\t<intro>";
			echo $noticia[introduction];
		echo "</intro>\n";
		
		echo "\t<text>";
			echo $noticia[fulltext];
		echo "</text>\n";
		
		echo "\t<comments>\n";
		// Fetch comments
		$comment=$db->prepare('SELECT * FROM comments where news_id=:news_id');
	    $comment->bindParam(':news_id',$_GET['id'],PDO::PARAM_INT);
	    $comment->execute();	
		
		foreach($comment as $row){
			echo "\t\t<comment>\n";
			echo "\t\t\t<id>".$row[id]."</id>\n";
			echo "\t\t\t<autor>".$row[autor]."</autor>\n";
			echo "\t\t\t<text>".$row[text]."</text>\n";
			echo "\t\t</comment>\n"	;		
		}
		
		echo "\t</comments>\n";
	
		echo "</new>";
	}
	else{
		echo "<error>\n";
		echo "\t<id>NO SUCH NEWS</id>\n";
		echo "\t<text>No such news</text>\n";
		echo "</error>";
	}	
?>
<?php
	$db = new PDO('sqlite:noticias.db');
	$noticia = $db->prepare('SELECT * FROM news where id=:id');
	$noticia->bindParam(':id',$_GET['id'],PDO::PARAM_INT);
	$noticia->execute();
	$noticia=$noticia->fetch(PDO::FETCH_ASSOC);
	
	if(isset($_GET['id']) && isset($noticia['id']) ){
		// Fetch the news
		
	
		// Fetch comments
		$comment=$db->prepare('SELECT * FROM comments where news_id=:news_id');
	    $comment->bindParam(':news_id',$_GET['id'],PDO::PARAM_INT);
	    $comment->execute();
		
		
		$noticia['comments']=array();
		
		while($comment_r=$comment->fetch(PDO::FETCH_ASSOC)){
			$noticia['comments'][]=$comment_r;
		}
		echo json_encode($noticia);
	}
	else{?>
	{"error":{"id":"NO SUCH NEWS","text":"No such news"}}
	<?php
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Exercício CSS</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style2.css">
	</head>
	<body>
	<?php
	$db = new PDO('sqlite:noticias.db');
	
	// Fetch news
	$noticia = $db->prepare('SELECT * FROM news where id=:id');
	$noticia->bindParam(':id',$_GET['id'],PDO::PARAM_INT);
	$noticia->execute();
	$noticia=$noticia->fetch();
	
	// Fetch comments news
	$comment=$db->prepare('SELECT * FROM comments where news_id=:news_id');
	$comment->bindParam(':news_id',$_GET['id'],PDO::PARAM_INT);
	$comment->execute();
	
?>
		<div id="cabecalho">
			<h1>Linguagens e Tecnologias Web</h1>
			<h2>Exercício CSS</h2>
		</div>
		<div id="menu">
			<ul>
				<li><a href="">Políticas</a></li>
				<li><a href="">Desporto</a></li>
				<li><a href="">Mundo</a></li>
				<li><a href="">Educação</a></li>
				<li><a href="">Sociedade</a></li>
			</ul>
		</div>
		<div id="conteudo">
			<div class="noticia">
				<?php echo $noticia['title']; ?>
				<p class="introducao">
					<?php echo $noticia['introduction']; ?>
				</p>
			</div>
			<h2>Comentários</h2>
			<?php
			while($c=$comment->fetch()) {
				echo 'Author: <b>'.$c['autor'].'</b><br/>';
				echo 'Comment: '.$c['text'].'<br/>';
				echo ' ---------------------<br>';
			}
			?>
		</div>
		<div id="rodape">
			<p>Exercícios de LTW @ FEUP - 2011</p>
		</div>
	</body>
</html>

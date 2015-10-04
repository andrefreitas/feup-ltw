﻿<!DOCTYPE html>
<html>
	<head>
		<title>Exercício CSS</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style2.css">
	</head>
	<body>
	<?php
	$db = new PDO('sqlite:noticias.db');
	$result = $db->query('SELECT * FROM news');
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
				<?php foreach( $result as $row) {
				echo '<h3>' . $row['title'] . ' </h3>';
				?><p class="introducao">
				<?php
				echo  $row['introduction'] . '</p>'; 
				?>
				<ul>
					<li><a href="noticia.php?id=<?php echo $row['id'] ?>">ver mais</a></li>
					<li><a href="comentarios1.html">comentarios (2)</a></li>
					<li><a href="partilhar1.html">partilhar</a></li>
				</ul>
				<?php
				}
				?>
				
			</div>
			
		</div>
		<div id="rodape">
			<p>Exercícios de LTW @ FEUP - 2011</p>
		</div>
	</body>
</html>

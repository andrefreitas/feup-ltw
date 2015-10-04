<!DOCTYPE html>
<html>
	<head>
		<title> Soma </title>
		<meta charset="utf-8">
	</head>
	<body>

	<?php
	$soma=intval($_GET['num2'])+intval($_GET['num1']);
	echo "Soma: ".$soma;
	?><br/>
	<a href="form2.html"> Voltar atras </a>
	</body>
</html>
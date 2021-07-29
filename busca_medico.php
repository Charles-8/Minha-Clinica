<?php
if (!isset($_GET['nome_medico'])) {
	header("Location: index_clinica.html");
	exit;
}
$nome = "%".trim($_GET['nome_medico'])."%";

        $servidor="localhost";
		$banco ="bd_clinica_gce";
		$usuario="root";
		$senha="";

		$link = new PDO('mysql:host=localhost;dbname=bd_clinica_gce', 'root','');

		$query = $link->prepare('SELECT * FROM `cadastro` WHERE `nome` LIKE :nome');
		$query->bindParam(':nome', $nome, PDO::PARAM_STR);
		$query->execute();

		$resultados = $query->fetchALL(PDO::FETCH_ASSOC);
		print_r($resultados);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Resultado da busca</title>
</head>
<body>
<h2>Resultado da busca</h2>
<?php
if (count($resultados)) {
	foreach($resultados as $Resultado) {
?>
<label><?php echo $Resultado['id']; ?> - <?php echo $Resultado['nome']; ?></label>
<br>
<?
} } else {
?>
<label>Não foram encontrados resultados pelo termo buscado.</label>
<?php
}
?>
</body>
</html>

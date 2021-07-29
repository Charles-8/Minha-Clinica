<?php
if (!isset($_GET['nome_paciente'])) {
	header("Location: index_clinica.html");
	exit;
}
$nome = "%".trim($_GET['nome_paciente'])."%";

        $servidor="localhost";
		$banco ="bd_clinica_gce";
		$usuario="root";
		$senha="";

		$link = new PDO('mysql:host=localhost;dbname=bd_clinica_gce', 'root','');

		$query = $link->prepare('SELECT * FROM `cadastro_paciente` WHERE `nome` LIKE :nome');
		$query->bindParam(':nome', $nome, PDO::PARAM_STR);
		$query->execute();

		$resultados = $query->fetchALL(PDO::FETCH_ASSOC);
		print_r($resultados);
?>
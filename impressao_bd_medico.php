<?php

		session_start();

		$servidor="localhost";
		$banco ="bd_clinica_gce";
		$usuario="root";
		$senha="";

		$link = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro ao conectar ao banco de dados');




		$query = sprintf("SELECT * FROM cadastro");// $query significa uma requsição
		$dados = mysqli_query($link, $query) or die(mysqli_error()); //comando da requisição
		$total = mysqli_num_rows($dados); // mysqli num rows é o número de linhas guardada na variavel $total
?>

<html>
<head>
	<title>Médicos Cadastrados</title>
</head>
<body>
	<h2>Lista de Médicos</h2>
    <form action ="busca_medico.php" method="GET">
    	<label>Nome:</label>
    	<input type="text" name="nome_medico" size="50" placeholder="Insira o nome do médico">
    	<button>Buscar</button>

    </form>
			
		<?php
				
			while($total = mysqli_fetch_array($dados)) { // enquanto numero de linhas for igual ao contúde de arrays faça!

				echo "<p>Nome:".$total['nome']." <br>CRM: ".$total['crm']." <br>Data de admissão : ".$total['data_de_admissao']."<br>Salário:".$total['salario']."<br>Especialização:".$total['especializacao']."</p>";

				// Link para chamar o arquivo DELETE
				echo "<a  href='delete_medico.php?id=".$total['id']."'> APAGAR </a><br><hr>";

			}
		?>
<br>
<br>
<a href=formulario_clinica.html>Cadastrar Médico</a> <center><a href=index_clinica.html>***Voltar a Página inicial***</a></center>
</body>
</html>


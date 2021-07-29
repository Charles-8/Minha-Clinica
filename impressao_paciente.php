<?php

		session_start();

		$servidor="localhost";
		$banco ="bd_clinica_gce";
		$usuario="root";
		$senha="";

		$link = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro ao conectar ao banco de dados');




		$query = sprintf("SELECT * FROM cadastro_paciente");// $query significa uma requsição
		$dados = mysqli_query($link, $query) or die(mysqli_error()); //comando da requisição
		$total = mysqli_num_rows($dados); // mysqli num rows é o número de linhas guardada na variavel $total
?>

<html>
<head>
	<title>Pacientes Cadastrados</title>
</head>
<body>
	<h2>Lista de Pacientes</h2>
    <form action ="busca_paciente.php" method="GET">
    	<label>Nome:</label>
    	<input type="text" name="nome_paciente" size="50" placeholder="Insira o nome do paciente">
    	<button>Buscar</button>

    </form>


<html>
<head>
	<title>Pacientes Cadastrados</title>
</head>
<body>

			
		<?php
				
			while($total = mysqli_fetch_array($dados)) { // enquanto numero de linhas for igual ao contúde de arrays faça!

				echo "<p>Nome:".$total['nome']." <br>Data de Nascimento: ".$total['data_de_nascimento']." <br>CPF : ".$total['cpf']."<br>RG:".$total['rg']."<br>Endereço:".$total['endereco']."<br>Telefone:".$total['telefone']."<br>Quarto:".$total['quarto']."<br>Médico Responsável:".$total['medico_responsavel']."</p>";

				// Link para chamar o arquivo DELETE
				echo "<a  href='delete_paciente.php?id=".$total['id']."'> APAGAR </a><br><hr>";

			}
		?>
<br>
<br>
<a href=formulario_paciente.html>Cadastrar Paciente</a> <center><a href=index_clinica.html>***Voltar a Página inicial***</a></center>
</body>
</html>


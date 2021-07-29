<?php

		session_start();

		$servidor="localhost";
		$banco ="bd_clinica_gce";
		$usuario="root";
		$senha="";

		$link = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro ao conectar ao banco de dados');




		$query = sprintf("SELECT * FROM visita");// $query significa uma requsição
		$dados = mysqli_query($link, $query) or die(mysqli_error()); //comando da requisição
		$total = mysqli_num_rows($dados); // mysqli num rows é o número de linhas guardada na variavel $total
?>

<html>
<head>
	<title>Visitas Médicas Marcadas</title>
</head>
<body>
	<h2>Visitas Agendadas</h2>
    <form action ="busca_visita.php" method="GET">
    	<label>Nome:</label>
    	<input type="text" name="nome_paciente" size="50" placeholder="Insira o nome do paciente">
    	<button>Buscar</button>

    </form>


<html>
<head>
	<title>Visitas Médicas Agendadas</title>
</head>
<body>

			
		<?php
				
			while($total = mysqli_fetch_array($dados)) { // enquanto numero de linhas for igual ao contúde de arrays faça!

				echo "<p>Nome:".$total['nome_paciente']." <br>Data da Visita: ".$total['dia_visita']." <br>Horario da Visita : ".$total['horario']."<br>Médico Visitante:".$total['medico_visitante']."</p>";

				// Link para chamar o arquivo DELETE
				echo "<a  href='delete_visita.php?id=".$total['id']."'> APAGAR </a><br><hr>";

			}
		?>
<br>
<br>
<a href=cadastro_visitas.php>Cadastrar Visita Médica</a> <center><a href=index_clinica.html>***Voltar a Página inicial***</a></center>
</body>
</html>


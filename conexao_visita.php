<?php
$nome_paciente = $_POST['nome_paciente'];
$dia_visita = $_POST['dia_visita'];
$horario = $_POST['horario'];
$medico_visitante = $_POST['medico_visitante'];

$servidor="localhost";
$banco ="bd_clinica_gce";
$usuario="root";
$senha="";

$link = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro ao conectar ao banco de dados');



$sql = "INSERT INTO visita (nome_paciente, dia_visita, horario, medico_visitante) VALUES ('$nome_paciente', '$dia_visita', '$horario', '$medico_visitante')";

mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($link);

echo "Visita Cadastrada com sucesso</br> ";
echo "<a href='index_clinica.html'>Clique aqui para voltar a página inicial</a><br>";

?>




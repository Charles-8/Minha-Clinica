<?php
$nome = $_POST['nome'];
$crm = $_POST['crm'];
$data_de_admissao = $_POST['data_de_admissao'];
$salario = $_POST['salario'];
$especializacao = $_POST['especializacao'];

$servidor="localhost";
$banco ="bd_clinica_gce";
$usuario="root";
$senha="";

$link = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro ao conectar ao banco de dados');



$sql = "INSERT INTO cadastro (nome, crm, data_de_admissao, salario, especializacao) VALUES ('$nome', '$crm', '$data_de_admissao', '$salario', '$especializacao')";

mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($link);

echo "cadastro realizado com sucesso</br> ";
echo "<a href='index_clinica.html'>Clique aqui para voltar a página inicial</a><br>";

?>




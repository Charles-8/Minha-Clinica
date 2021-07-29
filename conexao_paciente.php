<?php
$nome = $_POST['nome'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$endereco = $_POST['endereco'];
$telefone =$_POST['telefone'];
$quarto =$_POST['quarto'];
$medico_responsavel =$_POST['medico_responsavel'];


$servidor="localhost";
$banco ="bd_clinica_gce";
$usuario="root";
$senha="";

$link = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro ao conectar ao banco de dados');



$sql = "INSERT INTO cadastro_paciente (nome, data_de_nascimento, cpf, rg, endereco, telefone, quarto, medico_responsavel) VALUES ('$nome', '$data_de_nascimento', '$cpf', '$rg', '$endereco', '$telefone','$quarto', '$medico_responsavel')";

mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($link);

echo "Cadastro realizado com sucesso</br> ";
echo "<a href='index_clinica.html'>Clique aqui para voltar a página inicial</a><br>";

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title> Cadastro de Paciente </title>
</head>
<body>
	<center>
   
  <h2>Cadastro de Paciente</h2><br>
  <form name="cadastro" action="conexao_paciente.php" method="POST"><br><p>
    <label>Nome: </label>
    <input type="text" name="nome" size="45"><br><p>
    <label>Data de nascimento:</label>
    <input type="date" name="data_de_nascimento" size="8"><br><p>
    <label>CPF:</label>
    <input type="text" name="cpf" size="15"><br><p>
    <label>RG</label>
    <input type="text" name="rg" size="10"><br><p>
    <label>Endereço:</label>
    <input type="text" name="endereco" size="45"><br><p>
    <label>Telefone:</label>
    <input type="Tel" name="telefone" size="30"> <br><p>
    <label>Quarto:</label>  
    <input type="text" name="quarto" size="4"><br><p>
    <label>Médico responsável:</label>
     <select name="medico_responsavel">
      <option 
      >Selecione</option>
     <?php
     $servidor="localhost";
     $banco ="bd_clinica_gce";
     $usuario="root";
     $senha="";
      $link = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro ao conectar ao banco de dados');
     
      $sql = mysqli_query($link, "SELECT nome, especializacao from cadastro where id >=1");
       while ($row = mysqli_fetch_assoc($sql)) {
        echo "<option>".$row['nome']."  (".$row['especializacao'].")</option>";
         // code...
       }
     ?> 
    </select><br><p>

    <input type="submit" name="enviar" value="Cadastrar">
    </center>


  </form>
</body>

</html>




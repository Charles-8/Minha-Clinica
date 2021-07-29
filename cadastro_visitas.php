<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title> Cadastro de Visitas </title>
</head>
<body>
	<center>
   
  <h2>Agendamento de Visitas</h2><br>
  <form name="cadastro_visitas" action="conexao_visita.php" method="POST"><br><p>
    <label>Nome do Paciente: </label>
    <select name="nome_paciente">
      <option 
      >Selecione</option>
     <?php
     $servidor="localhost";
     $banco ="bd_clinica_gce";
     $usuario="root";
     $senha="";
      $link = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro ao conectar ao banco de dados');
     
      $sql = mysqli_query($link, "SELECT nome, quarto from cadastro_paciente where id >=1");
       while ($row = mysqli_fetch_assoc($sql)) {
        echo "<option>".$row['nome']."  (".$row['quarto'].")</option>";
        }
     ?> 
    </select><br><p>

    <label>Dia da visita:</label>
    <input type="date" name="dia_visita" size="8"><br><p>
    <label>Horário da visita:</label>
    <input type="time" name="horario" size="15"><br><p>
    <label>Médico visitante</label>
    <select name="medico_visitante">
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

    <input type="submit" name="enviar" value="Marcar visita">
    </center>


  </form>
</body>

</html>




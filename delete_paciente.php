<?php

        session_start();
        //Incluir arquivo


        $servidor="localhost";
        $banco ="bd_clinica_gce";
        $usuario="root";
        $senha="";

        $link = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro ao conectar ao banco de dados');


        //Variavel ID = FILTAR IMPUT (RECEBEE OS DADOS URL , UMA VÁRIAVEL ID ) 
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


        //SE A VÁRIAVEL SER DIFERENTE DE INT
        if (!empty($id)){

                //deletar da tabela cadastro_paciente  o ID dentro da VARIÁVEL $ID
                $result_notas = "DELETE FROM cadastro_paciente WHERE id='$id'";

                $delete_id = mysqli_query($link,$result_notas);


                    // SE (ELE AFETAR ALGUMA LINHA nesse ( conexão))
                    if (mysqli_affected_rows($link)) {

                        $_SESSION['msg'] = "<p style='color:green;'> Excluido com sucesso!</p>";
                        header("Location: index_clinica.html");

                    }else{

                        $_SESSION['msg'] = "<p style='color:red;'> Erro ao apagar, não foi deletado!</p>";
                        header("Location: index_clinica.html");

                    }


        }else{
            $_SESSION ['msg'] = "<p style='color:red;'> Erro ao apagar.</p>";
            header("Location: index_clinica.html");



        }


?>
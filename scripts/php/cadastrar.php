<?php

    $nome = $_GET["usuario_nome"];
    $id = $_GET["usuario_id"];
    $senha = $_GET["usuario_senha"];


    if (strlen($nome) >= 1 || strlen($nome) <= 100) {
        if (strlen($senha) >= 5 || strlen($senha) <= 10) {
            $espacoID =  count(explode(' ', $id, 2));
            if (strlen($id) >= 1 || strlen($id <= 10) && $espacoID > 2) {
    
                $host = "localhost";
                $user = "root";
                $password = "ifsp";
                $database = "cadastro";
            
                $connect = mysqli_connect($host, $user, $password, $database);
            
                if (!$connect) {
                    die("Erro na conexão com o MySQL: ". mysqli_connect_error());
                }
                echo "Conexão com o banco de dados OK\n";
            
                $query = "INSERT INTO usuarios(idusuario, nome, senha) VALUES ('$id', '$nome', '$senha')";
            
                $response = mysqli_query($connect, $query);
            
                if ($response) {
                    echo "Cadastrado com sucesso";
                } else {
                    echo "Cadastrado com erro";
                    var_dump(mysqli_error($connect));
                }
            
                mysqli_close($connect);
                header("Location http://127.0.0.1:5500/");
            }
        }
    } else {
        echo "Existe dados invalidos";
    }

?>
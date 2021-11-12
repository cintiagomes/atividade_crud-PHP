<?php

    session_start();

    require('../atividade_crud/database/conexao.php');

    if (isset($_GET["acoes"])) {
        $acao = $_GET["acoes"];
    } else {
        $acao = $_POST["acoes"];
    }

    switch ($acao) {
        case 'inserir':
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];

            $sql = "INSERT INTO tbl_pessoa (nome, sobrenome, email, celular)
            VALUES ('$nome', '$sobrenome', '$email', '$celular')";

            $resultado = mysqli_query($conexao, $sql);

            header("location: listagem/index.php");

            break;

        case 'deletar':

            $cod_pessoa = $_POST["cod_pessoa"];

            $sql = "DELETE FROM tbl_ WHERE cod_pessoa = $cod_pessoa";

            $resultado = mysqli_query($conexao, $sql);

            header("location: index.php");
       
        default:
            # code...
            break;
    }

?>
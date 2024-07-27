<?php
    include 'conexaoBD.php';

    function cadastrarUsuario($nome, $senha, $celular){
        connect();
        query("INSERT INTO conta (usuario, senha, celular) VALUES ('$nome', '$senha', '$celular')");
        close();
    }
    function buscarUsuario($nome){
        connect();
        $resultados = query("SELECT * FROM conta WHERE usuario = '$nome'");
        close();
        return $resultados;
    }
?>
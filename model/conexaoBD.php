<?php //Primeiro arquivo, serve para desenvolver as funcoes de conectar, executar e fechar
      //a conexao com o BD
    $conexao;

    function connect(){ //funcao pra conectar o servidor php com o bando
        global $conexao;
        $servidor = 'localhost';
        $nomeUsuario = 'root';
        $senhaUsuario = '';
        $base = 'perfectLook';
        $conexao = mysqli_connect($servidor, $nomeUsuario, $senhaUsuario, $base) or die(mysqli_connect_error());
       
    }

    function query($sql){ //funcao pra inserir codigos SQL e editar o banco
        global $conexao;
        mysqli_query($conexao, "SET CHARACTER SET utf8");
        $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        return $query;
    }

    function close(){ //funcao pra fechar a conexao
        global $conexao;
        mysqli_close($conexao);
    }
?>
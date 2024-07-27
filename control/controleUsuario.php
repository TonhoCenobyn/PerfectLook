<?php
    include '../model/crudUsuario.php';
    $opcao = $_POST["opcao"];

    switch ($opcao) {
        case 'Cadastrar':
            cadastrarUsuario($_POST["usuario"], sha1($_POST["senha"]), $_POST["celular"]);
            header("Location: ../view/usuarioLogin.php");
            break;
        case 'Entrar':
            $nome = $_POST["usuario"];
            $senha = sha1($_POST["senha"]);
            $resultados = buscarUsuario($nome);
            
            foreach($resultados as $banco);
            
            if (isset($banco)){
                if ($nome === $banco["usuario"]){
                    if ($senha === $banco["senha"]){
                        session_start();
                        $_SESSION["codigoU"] = $banco["codconta"];
                        $_SESSION["nome"] = $nome;
                        header("Location: ../view/pagPrincipal.php");
                    }
                    else{
                        session_start();
                        $_SESSION['erro_login'] = 'Usuario ou senha incorretos';
                        echo "<script>window.location = '../view/usuarioLogin.php';</script>";
                            
                    }
                }
            }
            else{
                session_start();
                $_SESSION['erro_login'] = 'Usuario ou senha incorretos';
                echo "<script>window.location = '../view/usuarioLogin.php';</script>";
            }
            break;
        case 'Sair':
            session_start();
            session_destroy();
            echo "<script>window.location = '../view/usuarioLogin.php';</script>";
    }
    
?>
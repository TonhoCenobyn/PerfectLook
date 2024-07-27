<?php
include '../model/crudRoupa.php';
$opcao = $_POST["opcao"];

switch ($opcao) {
    case 'Cadastrar':
        session_start();

        if (isset($_SESSION["codigoU"])) {
            $codigoU = $_SESSION["codigoU"];

            cadastrarRoupa(
                $codigoU,
                $_POST["peca"],
                $_POST["tamanho"],
                $_POST["cor"],
                $_POST["preco"]
            );
        }
       
        
        header("Location: ../view/pagPrincipal.php");
        break;
    case 'Alterar':
        alterarRoupa($_POST["codigo"],
        $_POST["peca"],
        $_POST["tamanho"],
        $_POST["cor"],
        $_POST["preco"]);
        header("Location: ../view/pagPrincipal.php");
        break;
    case 'Excluir':
            excluirRoupa($_POST["codigo"]);
            header("Location: ../view/pagPrincipal.php");
        break;
}

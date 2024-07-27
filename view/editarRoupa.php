<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="js\plentz-jquery-maskmoney-cdbeeac\src\jquery.maskMoney.js" type="text/javascript"></script>
    <title>Editar lRoupa</title>
</head>

<body class="body_pagPrincipal">
    <div class="navegacao">
        <nav class="navbar navbar-expand-lg" style="background-image: radial-gradient(#4F4F4F, #363636); border: 2px solid black;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="imagens/logo_simples.png" alt="livro_icone" width="60" height="60">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="pagPrincipal.php" style=color:#7CD9A5;>Mostrar roupas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrarRoupa.php" style=color:#7CD9A5;>Cadastrar nova roupa</a>
                        </li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            style="margin-top:0.5rem; margin-left:1.6rem;color:red;" class="bi bi-box-arrow-left"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                            <path fill-rule="evenodd"
                                d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                        </svg>
                        <li class="nav-item">
                            <form method="POST" action="../control/controleUsuario.php">
                                <input type="submit" class="nav-link" name="opcao" value="Sair"
                                    style="color: red;"></input>
                            </form>
                        </li>
                    </ul>
                    <div class="login_secao">
                        <?php
                        session_start();

                        if (isset($_SESSION['nome'])) {
                            $nome = $_SESSION['nome'];
                            echo "
                                    <h2 style=color:#7CD9A5;>Olá <span style='color: white;'>$nome</span>, bem vindo!</h2>
                                ";
                        } else {
                            echo "<script>
                                alert('Login não realizado');
                            </script>
                            ";

                            header("Location: usuarioLogin.php");

                        }
                        ?>
                    </div>

                </div>
            </div>
        </nav>
    </div>
    <div class="container" style="margin-top:1rem;">
        <h1>Editar livro</h1>
        <?php
        include '../model/crudRoupa.php';
        $codigo = $_GET["codigo"];

        $resultados = mostrarRoupasAlterar($codigo);

        foreach ($resultados as $linha)
            ;

        ?>
        <form method="POST" action="../control/controleRoupa.php">
            <div class="mb-3">
                <label for="peca" class="form-label">Peça:</label>
                <input type="text" class="form-control" id="peca" name="peca" value="<?= $linha['peca'] ?>">
            </div>
            <div class="mb-3">
                <label for="tamanho" class="form-label">Tamanho:</label>

                <select class="form-select" aria-label="Default select example" id="tamanho" name="tamanho">
                    <option style="visibility: hidden; pointer-events: none;">
                        <?= $linha['tamanho'] ?>
                    </option>
                    <option value="PP">PP</option>
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                    <option value="2G">2G</option>
                    <option value="3G">3G</option>
                    <option value="4G">4G</option>
                    <option value="5G">5G</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="cor" class="form-label">Cor:</label>
                <input type="color" class="form-control" id="cor" name="cor" value="<?= $linha['cor'] ?>">
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço:</label>
                <input type="text" step="0.1" class="form-control" id="preco" name="preco"
                data-thousands="." data-decimal="," data-prefix="R$" value="<?= $linha['preco'] ?>">
            </div>
            <input type="hidden" name="codigo" value="<?= $linha['codroupa'] ?>">
            <button type="submit" class="btn btn-primary" name="opcao" value="Alterar">Alterar</button>
            <button type="submit" class="btn btn-danger" name="opcao" value="Excluir">Excluir</button>
            <a href="pagPrincipal.php" class="btn btn-dark" name="opcao" value="Cancelar">Cancelar</a>
        </form>
    </div>
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js\mascara_dinheiro.js"></script>
</body>

</html>
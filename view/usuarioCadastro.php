<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro Usuario</title>
</head>

<body>
    <img src="imagens/fundoverde.jpg" class="background" />
    <div class="usuarioLogin_conteudo">
        <img class="logo" src="imagens/logo.png" />
        <div class="usuarioLogin_box">
            <form class="usuarioForm" method="POST" action="../control/controleUsuario.php">
                <div class="usuarioForm_usuario">
                    <label for="usuario">Usuário:</label> <br>
                    <input id="usuario" type="text" class="usuarioForm_input" name="usuario">
                </div>
                <div class="usuarioForm_senha">
                    <label for="senha">Senha:</label> <br>
                    <input id="senha" type="password" class="usuarioForm_input" name="senha">
                </div>
                <div>
                    <label for="celular">Celular:</label> <br>
                    <input id="celular" type="text" class="usuarioForm_input" name="celular">
                </div>

                <input type="submit" name="opcao" value="Cadastrar" class="enviar">

                <p>Já possui conta? então <a href="usuarioLogin.php">Logue na sua conta aqui</a></p>
            </form>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script type="text/Javascript" src="js\jquery\jquery-3.7.1.min.js"></script>
    <script type="text/Javascript" src="js\jquery\jquery.maskedinput.js"></script>
    <script type="text/Javascript" src="js\mascaras.js"></script>
</body>

</html>
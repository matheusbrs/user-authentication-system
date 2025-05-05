<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <header class="cabecalho">
        <div>
            <img class="logo" src="imagens/logoMenu.png" alt="">
        </div>
        <div>
            <ul class="links">
                <li><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path
                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                        </svg></a></li>

                <li><a class="blue" href="cadastro.php">CADASTRAR</a></li>
            </ul>
        </div>
    </header>
    <form action="" method="post">
        <h1>Login</h1>
        <label>CPF:</label>
        <input type="text" id="cpfLogin" name="cpfLogin" placeholder="Cpf">
        <p class="mensagemErroLogin">Por favor, preencha o campo!</p>
        <label>Senha:</label>
        <input type="password" id="senhaLogin" name="senhaLogin" placeholder="Senha">
        <p class="mensagemErroLogin">Por favor, preencha o campo senha!</p>
        <button id="buttonLogin" type="submit">Login <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                <path fill-rule="evenodd"
                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
            </svg></button>
    </form>
    <script src="script.js"></script>
</body>

</html>
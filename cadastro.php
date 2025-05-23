<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    
    <title>Cadastro</title>
</head>

<body>

    <header class="cabecalho container">
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
                <li><a href="login.php">LOGIN</a></li>
            </ul>
        </div>
    </header>

    <form id="formCadastro" action="" method="post">
        <h1>Criar conta</h1>
        <label>Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Nome">
        <p class="mensagemErroCadastro notification is-warning">Digite nome</p>
        <label>Sobrenome:</label>
        <input type="text" id="sobreNome" name="sobreNome" placeholder="Sobrenome">
        <p class="mensagemErroCadastro notification is-warning">Digite seu sobre nome</p>
        <label>Senha:</label>
        <input type="password" id="senhaCadastro" name="senha" placeholder="Senha">
        <p class="mensagemErroCadastro notification is-warning">Favor Crie uma senha com no minimo 8 caracteristicas</p>
        <label>E-mail:</label>
        <input type="e-mail" id="email" name="email" placeholder="E-mail">
        <p class="mensagemErroCadastro notification is-warning">Favor digite um E-mail valido</p>
        <label>Nascimento:</label>
        <input type="text" id="nascimento" name="nascimento" placeholder="Nascimento">
        <p class="mensagemErroCadastro notification is-warning">Digite sua data de nascimento</p>
        <label>Telefone:</label>
        <input type="tel" id="telefone" name="telefone" placeholder="Telefone">
        <p class="mensagemErroCadastro notification is-warning">Digite um número de telefone valido</p>
        <label for="">CPF:</label>
        <input type="text" id="cpfCadastro" name="cpf" placeholder="Cpf">
        <p class="mensagemErroCadastro notification is-warning">Digite um CPF valido</p>
        <button type="submit" id="bntCadastro">Cadastrar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg></button>
    </form>

<script src="script.js"></script>

</body>

</html>
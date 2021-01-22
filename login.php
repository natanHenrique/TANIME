<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <section class="containerL">
        <div class="login">
            <form action="?p=processa-login" method="POST">
                <h2>LOGIN ADMINISTRADOR</h2>
                <p>Nome: <input class="boxInput" id="nome" name="nome" type="text" placeholder="Digite seu nome..." autocomplete="off"></p> 
                <p>Senha: <input class="boxInput" id="senha" name="senha" type="password" placeholder="Digite sua senha..." autocomplete="off"></p> 
                <button class="boxBtn" name="btn-entrar">Entrar</button>
            </form>
        </div>
    </section>
</body>
</html>

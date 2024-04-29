<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMCyberEducation</title>
    <link  href="<?= PUBLIC_ASSETS_CSS . "login.css" ?>" rel="stylesheet">
</head>
<body>


    <div class="box">
        <form method="POST" action="<?= ROUTE . "auth" ?>">
            <h2>Login</h2>
            <div class="inputBox">
                <input type="text" required="required" name="user">
                <span>Usuário</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="password">
                <span>Senha</span>
                <i></i>
            </div>
            <div class="links">
                <a></a>
            </div>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
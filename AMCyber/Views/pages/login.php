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
    <?
        $pdo = MySql::connect();
    ?>
        <form>
            <h2>Login</h2>
            <div class="inputBox">
                <input type="text" required="required">
                <span>Usuário</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required">
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
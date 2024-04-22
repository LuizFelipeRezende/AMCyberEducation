<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página não encontrada</title>
    <link rel="stylesheet" href="<?= PUBLIC_ASSETS_CSS . "404.css" ?>">
</head>

<body>
    <div class="center">
        <div class="error">
            <div class="number">4</div>
            <div class="illustration">
                <div class="circle"></div>
                <div class="clip">
                    <div class="paper">
                        <div class="face">
                            <div class="eyes">
                                <div class="eye eye-left"></div>
                                <div class="eye eye-right"></div>
                            </div>
                            <div class="rosyCheeks rosyCheeks-left"></div>
                            <div class="rosyCheeks rosyCheeks-right"></div>
                            <div class="mouth"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="number">4</div>
        </div>

        <div class="text">Whoops. A página não pôde ser encontrada.</div>
        <a class="button" href="<?= ROUTE . "home" ?>">Voltar para início</a>
    </div>

</body>

</html>
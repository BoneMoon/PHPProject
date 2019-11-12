<html lang="pt-pt">

<head>
    <meta charset="utf-8">

    <title></title>
    <meta name="description" content="Template HTML base para as aulas">
    <meta name="author" content="José Viana">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- <link rel="stylesheet" href="css/sessoes.css?v=1.0"> -->
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper regis">
        <h2>Iniciar Sessão</h2>
        <p>Por favor introduza as suas credenciais para iniciar sessão.</p>

        <div style="padding-top: 40px;">

            <?php
            if (empty($_SESSION['userId'])) {
                ?>
                <form action="<?= path("/autenticar/loginPOST") ?>" method="post" id="frmLogin">

                    <?php
                        if (!empty($mensagem)) {
                            ?>
                        <div class="error-message"><?php echo $mensagem; ?></div>
                    <?php
                        }
                        ?>

                    <div>
                        <div>Email:</div>
                        <div><input id="id_utilizador" name="id_utilizador" type="text"></div>
                    </div>
                    <div>
                        <div>Palavra-passe</div>
                        <div><input id="palavra_passe" name="palavra_passe" type="password"></div>
                    </div>
                    <div>
                        <input type="submit" name="login" value="Iniciar sessão">
                    </div>
                </form>
            <?php
            } else {
                ?>
                <form action="login.php" method="post" id="frmLogout">
                    <div>
                        <h2>Olá <?php echo $_SESSION['nome'] ?></h2>
                    </div>
                    <div><input type="submit" name="logout" value="Terminar sessão" class="logout-button"></div>
                </form>
            <?php
            }
            ?>

        </div>
        <div style="padding-top: 40px;">
            <a href="http://localhost/brawlstars/">Voltar</a>
        </div>
    </div>
</body>

</html>
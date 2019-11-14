<html lang="pt-pt">

<head>
    <meta charset="utf-8">

    <meta content="text/html; charset=utf-8" />
    <style type="text/css">
    </style>
    <?php require __DIR__ . "/../partial/style.php" ?>
</head>

<body>
    <?php require __DIR__ . "/../partial/navBar.php" ?>
    <div style="color: white;">
        <section class="container pt-5" style="text-align: center;">
            <h2><p>Iniciar Sessão</p></h2>
            <p>Por favor introduza as suas credenciais para iniciar sessão.</p>
            <div style="padding-top: 40px;">
        </section>
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
            <section class="container">
            <div class="form-group" style="width: 60%">
                <label for="exampleFormControlInput1">E-mail:</label>
                <input type="email" name="id_utilizador" class="form-control bBorder" id="exampleFormControlInput1" placeholder="Email">
            </div>
            <div class="form-group" style="width: 60%">
                <label for="exampleFormControlInput1">Palavra-passe:</label>
                <input type="password" name="palavra_passe" class="form-control bBorder" id="exampleFormControlInput1" placeholder="Palavra-Passe">
            </div>            
            <div class="row mx-auto pt-5" style="float: right">
                <input type="submit" class="btn btn-success buttonsSameWidth" value="login">
            </div>
            <div class="pt-5">
                <button type="submit" class="btn btn-primary buttonsSameWidth"><a href="<?= path("/") ?>"></a>voltar</button>
            </div>
            </section>
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
    </div>
    <?php require __DIR__ . "/../partial/scripts.php" ?>
</body>

</html>
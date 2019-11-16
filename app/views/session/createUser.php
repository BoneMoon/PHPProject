<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Utilizador</title>
    <?php require __DIR__ . "/../partial/style.php" ?>
</head>

<body>
    <?php require __DIR__ . "/../partial/navBar.php" ?>

    <section class="container pt-5" style="color: white; text-align: center">
        <h1>Criar Conta</h1>
    </section>
    <div class="container" style="color: white;">
        <section class="mx-auto" style="width: 60%">
    <form method="POST" action="<?= path("/autenticar/createUser") ?>">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome:</label>
            <input type="name" name="nome" class="form-control bBorder" id="exampleFormControlInput1" placeholder="Nome do Utilizador">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">E-mail:</label>
            <input type="email" name="id_utilizador" class="form-control bBorder" id="exampleFormControlInput1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Palavra-passe:</label>
            <input type="password" name="palavra_passe" class="form-control bBorder" id="exampleFormControlInput1" placeholder="Palavra-Passe">
        </div>
        <div class="row pt-5 mx-auto" style="">
            <input type="submit" class="btn btn-success buttonsSameWidth" value="Criar Conta" >
        </div>
        <div class="pt-5">
        <input type="button" value="Voltar" class="btn btn-primary" id="btnHome" onClick="document.location.href='<?= path("/autenticar/login") ?>'" />
        </div>
    </form>

    </section>
    </div>

    <?php require __DIR__ . "/../partial/scripts.php" ?>
</body>

</html>
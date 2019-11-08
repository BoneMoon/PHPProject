<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Brawler</title>
</head>
<body>
    <?php require __DIR__ . "/../partial/navBar.php" ?>
    <div class="container">
    <div class="row mx-auto pt-4">
        <h3>Insira os dados para criar um novo Brawler</h3>
    </div>
    <div class="row">
        <div class="col-sm-7">
        <div><p class="pt-5 preInputBrawler">Nome:</p><input class="inputBrawler" name="nomeBrawler" type="text"></div>
        <div><p class="pt-5 preInputBrawler">Raridade:</p><input class="inputBrawler" name="nomeBrawler" type="text"></div>
        <div><p class="pt-5 preInputBrawler">Tipo:</p><input class="inputBrawler" name="nomeBrawler" type="text"></div>
        <div><p class="pt-5 preInputBrawler">Vida:</p><input class="inputBrawler" name="nomeBrawler" type="text"></div>
        <div><p class="pt-5 preInputBrawler">Ataque:</p><input class="inputBrawler" name="nomeBrawler" type="text"></div>      
        </div>
        <div class="col-sm-5 pt-5">
            <div><p>Escolher imagem</p></div>
            <section class="" style="background-color: red; width: 200px; height: 200px;">
                <div>Preview...</div>
                
            </section>
            <div class="row pt-5">
                <button class="btn btn-primary">procurar</button>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <button class="btn btn-primary">Criar Brawler</button>
    </div>
    </div>
</body>    
    
</html>
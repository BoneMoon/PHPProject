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

<form method="POST" action="<?= path("/brawler/createBrawler") ?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome:</label>
    <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nome do Brawler">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Raridade</label>
    <select class="form-control" id="exampleFormControlSelect1" name="rarity">
      <option>common</option>
      <option>rare</option>
      <option>super rare</option>
      <option>epic</option>
      <option>mythic</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Tipo</label>
    <select class="form-control" id="exampleFormControlSelect1" name="role">
      <option>fighter</option>
      <option>healer</option>
      <option>sharpshooper</option>
      <option>thrower</option>
      <option>heavyweight</option>
      <option>batter</option>
      <option>support</option>
      <option>dashing assassin</option>
      <option>skirmisher</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Vida:</label>
    <input type="name" name="health" class="form-control" id="exampleFormControlInput1" placeholder="Nome do Brawler">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Velocidade:</label>
    <input type="name" name="speed" class="form-control" id="exampleFormControlInput1" placeholder="Nome do Brawler">
  </div>
  <div class="row pt-5">
        <input type="submit" class="btn btn-primary" value="Criar Brawler">
    </div>
</form>


        <!-- <div><p class="pt-5 preInputBrawler">Nome: </p><input class="inputBrawler" name="name" type="text"></div>
        <div><p class="pt-5 preInputBrawler">Raridade: </p><input class="inputBrawler" name="nomeBrawler" type="text"></div>
        <div><p class="pt-5 preInputBrawler">Tipo: </p><input class="inputBrawler" name="nomeBrawler" type="text"></div>
        <div><p class="pt-5 preInputBrawler">Vida: </p><input class="inputBrawler" name="nomeBrawler" type="text"></div>
        <div><p class="pt-5 preInputBrawler">Ataque: </p><input class="inputBrawler" name="nomeBrawler" type="text"></div>      
        </div>
        <div class="col-sm-5 pt-5">
            <div><p>Escolher imagem</p></div>
            <section class="" style="background-color: red; width: 200px; height: 200px;">
                <div>Preview...</div>
                
            </section>
            <div class="row pt-5">
                <button class="btn btn-primary">procurar</button>
            </div>
        </div> -->
    </div>
    
    </div>
</body>    
    
</html>
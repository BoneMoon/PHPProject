<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Criar Brawler</title>

  <?php require __DIR__ . "/../partial/style.php" ?>
</head>

<body>
  <?php require __DIR__ . "/../partial/navBar.php" ?>
  <div class="container">
    <div class="row mx-auto pt-4">
      <h3 style="color: white;">Insira os dados para criar um novo Brawler</h3>
    </div>
    <form method="POST" enctype="multipart/form-data" action="<?= path("/brawler/createBrawler") ?>">
    <div class="row">
        <div class="col-md-8 pt-5">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nome:</label>
            <input type="name" name="name" class="form-control borderForms" id="exampleFormControlInput1" placeholder="Nome do Brawler">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Raridade</label>
            <select class="form-control borderForms" id="exampleFormControlSelect1" name="rarity">
              <option>common</option>
              <option>rare</option>
              <option>super rare</option>
              <option>epic</option>
              <option>mythic</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Tipo</label>
            <select class="form-control borderForms" id="exampleFormControlSelect1" name="role">
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
            <input type="name" name="health" class="form-control borderForms" id="exampleFormControlInput1" placeholder="Nome do Brawler">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Velocidade:</label>
            <input type="name" name="speed" class="form-control borderForms" id="exampleFormControlInput1" placeholder="Nome do Brawler">
          </div>
        </div>
        <div class="col-md-4 pt-5">
            <label for="inputFicheiro">Procurar</label>
            <input type="File" name="image" class="form-control borderForms" id="ficheiro" placeholder="600">
    </div>
    <div class="row pt-5">
            <input type="submit" class="btn btn-primary" value="Criar Brawler">
          </div>
    </form>
    <?php require __DIR__ . "/../partial/scripts.php" ?>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <?php require __DIR__ . "/../partial/style.php" ?>
  <style>
    body {
      background-color: royalblue;
    }
  </style>
</head>

<body>
  <nav class="navbar PersonalizaNavBar">
    <a class="navbar-brand" href="http://localhost/brawlstars/">
      <img src="assets/imgs/Brawl_Stars_Logo.png" width="50" height="40" alt="">
    </a>
    <form class="form-inline mx-auto">
      <input class="form-control mr-sm-2" id="CampoPesquiza" type="search" placeholder="Procurar Brawller" aria-label="Search">
      <button class="btn my-2 my-sm-0" id="NavButton" type="submit"><a>Pesquisar</a></button>
    </form>
    <!--<a href="http://localhost/brawlstars/app/views/session/login.php"><button type="button" id="NavButton" class="btn btn-warning m-2">login</button>-->
    <a href="<?= path("/app/views/session/login.php")?>"><button type="button" id="NavButton" class="btn btn-warning m-2">login</button>
    <a href="<?= path("/app/views/session/logout.php")?>"><button type="button" id="NavButton" class="btn btn-warning m-2">logout</button>
  </nav>

  <?php require __DIR__ . "/../partial/scripts.php" ?>
</body>

</html>
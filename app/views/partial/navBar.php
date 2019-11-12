<!-- é aqui que tens de pôr a cena dos botões -->
<nav class="navbar PersonalizaNavBar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= path("/") ?>">
            <img src="<?= path("/assets/imgs/Brawl_Stars_logo.png") ?>" width="50" height="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-top" aria-controls="nav-top" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-top">
            <form class="form-inline mx-auto my-2 my-lg-0">
                <input class="form-control mr-sm-2" id="CampoPesquiza" type="search" placeholder="Procurar Brawller" aria-label="Search">
                <button class="btn my-2 my-sm-0" id="NavButton" type="submit">Pesquisar</button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?= path("/autenticar/login") ?>" id="NavButton" class="nav-link m-2">login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
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
            <ul class="navbar-nav ml-auto">
                
            <?php if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) : ?>
                <li class="nav-item buttonsSameWidth">
                    <a href="<?= path("/autenticar/logout") ?>" id="NavButton" class="nav-link m-2">logout</a>
                </li>
            <?php else : ?>
                <li class="nav-item buttonsSameWidth">
                    <a href="<?= path("/autenticar/login") ?>" id="NavButton" class="nav-link m-2">login</a>
                </li>
            <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
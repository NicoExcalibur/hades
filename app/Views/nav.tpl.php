<nav>
    <div class="logo">NBA DB</div>

    <div class="nav-links">
        <ul class="navbar-list">
            <li class="nav-item">
                <a href="<?= $router->generate('homepage'); ?>" class="nav-link ">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?= $router->generate('player-list'); ?>" class="nav-link">Joueurs</a>
            </li>
            <li class="nav-item">
                <a href="<?= $router->generate('ranking'); ?>" class="nav-link">Classements</a>
            </li>
        </ul>
    </div>
</nav>
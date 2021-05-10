<nav>
    <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/fr/c/c0/Hades_Logo.png" alt="Logo Hades"></div>

    <div class="nav-links">
        <ul class="navbar-list">
            <li class="nav-item">
                <a href="<?= $router->generate('homepage'); ?>" class="nav-link ">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Personnages</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Objets</a>
            </li>
            <li class="nav-item">
                <a href="<?= $router->generate('simulator'); ?>" class="nav-link">Build Simulator</a>
            </li>
        </ul>
    </div>
</nav>
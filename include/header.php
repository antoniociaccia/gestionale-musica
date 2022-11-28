<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/frontend-22-23/gestionale-musica/" class="nav-link <?php
            echo (basename($_SERVER['REQUEST_URI']) == 'gestionale-musica') ? 'active' : ''; ?>" aria-current="page">Home</a>
        </li>
        <li class="nav-item"><a href="/frontend-22-23/gestionale-musica/categoria" class="nav-link <?php
            echo (basename($_SERVER['REQUEST_URI']) == 'categoria') ? 'active' : ''; ?>">Categoria</a>
        </li>
        <li class="nav-item"><a href="/frontend-22-23/gestionale-musica/artista" class="nav-link <?php
            echo (basename($_SERVER['REQUEST_URI']) == 'artista') ? 'active' : ''; ?>">Artisti</a>
        </li>
        <li class="nav-item"><a href="/frontend-22-23/gestionale-musica/brano" class="nav-link <?php
            echo (basename($_SERVER['REQUEST_URI']) == 'brano') ? 'active' : ''; ?>">Brani</a>
        </li>
        <li class="nav-item"><a href="/frontend-22-23/gestionale-musica/newsletter" class="nav-link <?php
            echo (basename($_SERVER['REQUEST_URI']) == 'newsletter') ? 'active' : ''; ?>">Newsletter</a>
        </li>
    </ul>
</header>
<nav class="navbar">
    <div class="container">

        <!-- Logo -->
        <div class="navbar-brand">
            <a href="<?php echo url('home'); ?>" class="logo">
                <i class="fas fa-leaf"></i> Panturismo
            </a>
        </div>

        <!-- Menu Desktop -->
        <ul class="navbar-menu">
            <li><a href="<?php echo url('home'); ?>" class="nav-link">Home</a></li>
            <li><a href="<?php echo url('sobre'); ?>" class="nav-link">Sobre</a></li>
            <li><a href="<?php echo url('guia'); ?>" class="nav-link">Guia Turístico</a></li>

            <li class="dropdown">
                <a href="<?php echo url('pacotes'); ?>" class="nav-link">Pacotes</a>
            </li>
        </ul>

        <form id="search-form" class="search-box" action="#" method="GET" autocomplete="off">
            <input type="text" id="site-search" name="q" placeholder="Buscar na página..." class="search-input">
            <button type="submit" class="search-btn">
                <i class="fa fa-search"></i>
            </button>
        </form>

        <!-- Menu Mobile Toggle -->
        <button class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Botão de alternância de tema -->
        <button id="theme-toggle" class="theme-toggle">
            <i id="theme-icon" class="fa-solid fa-moon"></i>
        </button>


    </div>

    <div class="search-container">
        <div id="search-results" class="search-results" aria-live="polite"></div>
    </div>

</nav>
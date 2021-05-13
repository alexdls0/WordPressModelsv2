<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <a class="navbar-brand" href="<?php echo get_option('Home');?>">Top<span>Model</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="<?php echo get_page_link(get_page_by_title('Tienda')->ID);?>" class="nav-link">Tienda</a></li>
        <li class="nav-item"><a href="<?php echo get_page_link(get_page_by_title('Custom Account')->ID);?>" class="nav-link">Mi cuenta</a></li>
        <li class="nav-item"><a href="<?php echo get_page_link(get_page_by_title('Custom Cart')->ID);?>" class="nav-link"><span class="dashicons dashicons-cart"></span></a></li>
        </ul>
    </div>
    </div>
</nav>
<section class="hero-wrap hero-wrap-2 seccionarchives"></section>
<nav class="nav--row">
    <div class="nav__logo">
        <img onclick="location.href='<?php bloginfo('wpurl'); ?>';" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2022/09/Experience-logo-2022-Q.png" alt="icone du site">
    </div>
    <?php wp_nav_menu( array( 'menu' => 'navbar' ) ); ?>
    <div class="nav__contact">
        <a href="tel:0474423218">04 74 42 32 18</a>
            <img onclick="location.href='tel:0474423218';" src="<?php bloginfo('stylesheet_directory'); ?>/assets/ico/pictonav-tel.svg" alt="icone téléphone">
    </div>
    <div class="nav__burger" id="burger">
        <div></div>
        <div></div>
        <div></div>
    </div>
</nav>
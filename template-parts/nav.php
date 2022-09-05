<nav>
    <div class="nav__logo">
        <img onclick="location.href='<?php bloginfo('wpurl'); ?>';" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2022/09/Experience-logo-2022-Q.png" alt="icone du site">
    </div>
    <?php wp_nav_menu( array( 'menu' => 'navbar' ) ); ?>
    <div class="nav__contact">
        <a href="#">04 74 42 32 18</a>
    </div>
    <div class="nav__burger" id="burger">
        <div></div>
        <div></div>
        <div></div>
</nav>
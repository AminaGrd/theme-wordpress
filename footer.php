    </div><!-- fin div.content -->
    <footer>
        <div class="footer__infos row">
            <?php wp_nav_menu( array( 'menu' => 'navbar' ) ); ?>
            <div class="footer__logo">
                <img onclick="location.href='<?php bloginfo('wpurl'); ?>';" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2022/09/Experience-logo-2022-Q-white.png" alt="icone du site">
            </div>
            <div class="footer__contact">
                <p>21 rue Henri Dunant<br>01250 CEYZERIAT</p>
                <div id="footer__phone">
                <a href="tel:0474423218"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/ico/picto-tel.svg" alt="icone de téléphone"></a>
                    <p class="bold"><a href="tel:0474423218">04 74 42 32 18</a></p>
                </div>
                
                <div id="footer__contactRS">
                <a href="https://fr-fr.facebook.com/" class="footer__contactRS">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/ico/picto-fb.svg" alt="icone de facebook">
                </a>
                <a href="mailto:experience2@wanadoo.fr" class="footer__contactRS">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/ico/picto-mail.svg" alt="icone de mail">
                </a>
                </div>
            </div>
        </div>
        <div class="footer__credits">
            <?php wp_nav_menu( array( 'menu' => 'footer' ) ); ?>
        </div>
    </footer>
    <script src="<?php bloginfo('template_directory'); ?>/assets/scripts/nav.js"></script>
</body>
</html>
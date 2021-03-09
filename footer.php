</main>
<footer class="footer">
    <div class="wrapper">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/logo.svg" alt="New Directions Home Page">
        </a>

        <nav class="footer-nav">
            <ul class="footer-menu">
                <?php
                    $args = array(
                        'theme_location' => 'footer-menu',
                        'menu' => 'footer-menu',
                        'container' => 'false',
                        'items_wrap' => '%3$s'
                    );
                ?>
                <?php wp_nav_menu($args); ?>
            </ul>
        </nav>

        <?php if( have_rows('social', 'option') ) : ?>
            <ul class="social-menu">
                <?php while(have_rows('social', 'option')) : the_row(); ?>
                <?php
                    $network = get_sub_field('network');
                    $link = get_sub_field('link');
                    if ($link) {
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'];
                        if ($link_target == NULL) {
                            $link_target = '_self';
                        }
                    }
                ?>
                        <?php if ($network == 'facebook' && $link): ?>
                            <li class="menu-item"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target; ?>"><span class="visually-hide-text"><?php echo $link_title; ?></span><i class="fab fa-facebook-f icon"></i></a></li>
                        <?php elseif ($network == 'twitter' && $link): ?>
                            <li class="menu-item"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target; ?>"><span class="visually-hide-text"><?php echo $link_title; ?></span><i class="fab fa-twitter icon"></i></a></li>
                        <?php elseif ($network == 'instagram' && $link): ?>
                            <li class="menu-item"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target; ?>"><span class="visually-hide-text"><?php echo $link_title; ?></span><i class="fab fa-instagram icon"></i></a></li>
                        <?php elseif ($network == 'snapchat' && $link): ?>
                            <li class="menu-item"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target; ?>"><span class="visually-hide-text"><?php echo $link_title; ?></span><i class="fab fa-snapchat icon"></i></a></li>
                        <?php elseif ($network == 'pinterest' && $link): ?>
                            <li class="menu-item"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target; ?>"><span class="visually-hide-text"><?php echo $link_title; ?></span><i class="fab fa-pinterest icon"></i></a></li>
                        <?php elseif ($network == 'googleplus' && $link): ?>
                            <li class="menu-item"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target; ?>"><span class="visually-hide-text"><?php echo $link_title; ?></span><i class="fab fa-googleplus icon"></i></a></li>
                        <?php elseif ($network == 'linkedin' && $link): ?>
                            <li class="menu-item"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target; ?>"><span class="visually-hide-text"><?php echo $link_title; ?></span><i class="fab fa-linkedin-in icon"></i></a></li>
                        <?php elseif ($network == 'youtube' && $link): ?>
                            <li class="menu-item"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target; ?>"><span class="visually-hide-text"><?php echo $link_title; ?></span><i class="fab fa-youtube icon"></i></a></li>
                        <?php elseif ($network == 'vimeo' && $link): ?>
                            <li class="menu-item"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo $link_target; ?>"><span class="visually-hide-text"><?php echo $link_title; ?></span><i class="fab fa-vimeo icon"></i></a></li>
                        <?php endif; ?>
                <?php endwhile;?>
            </ul>
            
        <?php endif; ?>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

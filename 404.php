<?php get_header(); ?>


<section class="wp-block-mightily-intro-01 block intro <?php the_field( 'background', 'option' ); ?>" style="opacity: 1;">
    <?php if ( get_field( 'enable_icon', 'option' ) == 1 ) : ?>
        <div class="icon <?php the_field( 'icon_type', 'option' ); ?>">
            <?php if(get_field( 'icon_type', 'option' ) == 'image') : ?>
                <?php $icon_image = get_field( 'icon_image', 'option' ); ?>
                <?php if ( $icon_image ) : ?>
                    <img src="<?php echo esc_url( $icon_image['url'] ); ?>" alt="<?php echo esc_attr( $icon_image['alt'] ); ?>" />
                <?php endif; ?>
            <?php else : ?>
                <?php echo do_shortcode(get_field('icon_animation', 'option')); ?>
            <?php endif;?>
        </div>
    <?php endif; ?>
    <div class="wrapper">
        <div class="row">
            <div class="col">
                <div class="content">
                    <h1 class="title blue"><?php the_field( 'title', 'option' ); ?></h1>
                    <?php the_field( 'content', 'option' ); ?>
                    <?php if ( have_rows( 'buttons', 'option' ) ) : ?>
                        <div class="wp-block-buttons">
                            <?php while ( have_rows( 'buttons', 'option' ) ) : the_row(); ?>
                                <div class="wp-block-button">
                                    <?php $link = get_sub_field( 'link' ); ?>
                                    <?php if ( $link ) : ?>
                                        <a class="wp-block-button__link has-background" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
	
<?php get_footer(); ?>

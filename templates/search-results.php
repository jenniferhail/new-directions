<?php
/* Template Name: Search Results */
get_header();
$args = array(
    'post_type'         => array('post', 'page'),
    'posts_per_page'    => 6,
    'post__not_in'      => array(1119),
    'facetwp'           => true,
);
$query = new WP_Query( $args );
?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>

<section class="block listing-template search-results">
	<div class="wrapper">
        <div class="fieldset filters">
            <h2 class="search-term">You searched for: <span class="term"></span></h2>
            <?php echo facetwp_display( 'facet', 'site_search' ); ?>
        </div>
        <div class="results">
            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                <div id="post-<?php the_ID(); ?>" class="item-<?php echo get_post_type(); ?>">
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo wp_trim_words(get_the_excerpt(), $num_words = 20, $more = null); ?></p>
                    <div class="buttons list-buttons post-page-button">
                        <a href="<?php the_permalink(); ?>" target="_self" aria-label="<?php the_title(); ?>">View</a>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); else : ?>
                <div class="no-results">
                    <p>Sorry, nothing matched your search.</p>
                </div>
            <?php endif; ?>
        </div>
	</div>
    <?php echo do_shortcode('[facetwp facet="load_more"]'); ?>

</section>

<?php get_footer(); ?>

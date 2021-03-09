<?php
/* Template Name: Staff and Board */
get_header();

$args = array(
    'post_type'         => 'people',
    'posts_per_page'    => -1,
    'facetwp'           => true,
    'order'             => 'ASC',
    'orderby'           => 'meta_value',
    'meta_key'          => 'last_name',

);
$query = new WP_Query( $args );

?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>

<section class="block listing-template people">
	<div class="wrapper">
        <div class="fieldset filters">
            <?php echo facetwp_display( 'facet', 'people_type' ); ?>
        </div>
        <div class="results">
            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                <?php include(locate_template('list-items/people-item.php')) ?>        
            <?php endwhile; wp_reset_postdata(); else : ?>
                <div class="no-results">
                    <p>Sorry, nothing matched your criteria.</p>
                </div>
            <?php endif; ?>
        </div>
	</div>
</section>

<?php get_footer(); ?>

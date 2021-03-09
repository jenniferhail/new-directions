<?php
/* Template Name: Financial Reports */
get_header();

$args = array(
    'post_type' => 'documents',
    'posts_per_page' => 6,
    'facetwp' => true,
);
$query = new WP_Query( $args );

?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>

<section class="block listing-template documents">
	<div class="wrapper">
        <div class="fieldset filters">
            <?php echo facetwp_display( 'facet', 'document_type' ); ?>
        </div>
        <div class="results">
            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                <?php include(locate_template('list-items/document-item.php')) ?>        
            <?php endwhile; wp_reset_postdata(); else : ?>
                <div class="no-results">
                    <p>Sorry, nothing matched your criteria.</p>
                </div>
            <?php endif; ?>
        </div>        
	</div>
    <?php echo do_shortcode('[facetwp facet="load_more"]'); ?>
</section>

<?php get_footer(); ?>

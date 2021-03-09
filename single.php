<?php get_header(); ?>
<?php 
     

    $args = array(
        'fields' => 'ids',
    );
    $the_categories = wp_get_post_categories(get_the_ID(), $args);
    $start_date = get_field('start_date');
    $end_date = get_field('end_date');
    $start_time = get_field('start_time');
    $end_time = get_field('end_time');

?>

<section class="layout single-blog">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('wrapper'); ?>>
            <div class="intro bg">
                <div class="wrapper">
                    <div class="row">
                        <div class="col">
                            <div class="content">
                                <h2 class="title"><?php the_title(); ?></h2>
                                <?php if(in_array(6, $the_categories)) : ?>
                                    <p class="date">
                                        <?php 
                                        if($start_date) {
                                            echo $start_date;
                                        } 
                                        if($end_date) { 
                                            echo ' - ' . $end_date;
                                        } 
                                        if($start_time) {
                                            echo ' | ' . $start_time;
                                        }
                                        if($end_time) {
                                            echo ' - ' . $end_time;
                                        }
                                        ?>
                                    </p>                               
                                <?php else: ?>
                                    <p class="date"><?php the_date(); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="the-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>

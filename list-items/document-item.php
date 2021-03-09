<div class="item-<?php echo get_post_type(); ?>">
	<h2><?php the_title(); ?></h2>
	<p><?php the_field( 'description' ); ?></p>
	<div class="buttons list-buttons download-button">
		<?php if ( get_field( 'document' ) ) : ?>
			<a href="<?php the_field( 'document' ); ?>" aria-label="Download <?php the_title(); ?>">Download</a>
		<?php endif; ?>	
	</div>
</div>
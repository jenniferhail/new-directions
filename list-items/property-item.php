<div class="item-<?php echo get_post_type(); ?>">
	<?php $image = get_field( 'image' ); ?>
	<?php if ( $image ) : ?>
		<div class="image" style="background-image: url('<?php echo esc_url( $image['url'] ); ?>')">
			<img class="visually-hidden" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
		</div>
	<?php endif; ?>
	<h2><?php the_title(); ?></h2>
	<p><?php the_field( 'description' ); ?></p>
	<?php $link = get_field( 'link' ); ?>
	<?php if ( $link ) : ?>
		<a class="property-link" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
	<?php endif; ?>	
	<?php if(get_field('text')) : ?>
		<p class="text"><?php the_field( 'text' ); ?></p>
	<?php endif; ?>
</div>
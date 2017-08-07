<div class="item">
	<div class="item-inner">
		<div class="post-image">
			<a href="<?php esc_attr(the_permalink()); ?>">
				<?php the_post_thumbnail($params['image_size']); ?>
			</a>
		</div>		
		<div class="post-info">
			<a href="<?php esc_attr(the_permalink()); ?>">
				<?php the_title('<h3 class="title">', '</h3>'); ?>
			</a>
			<?php the_category(); ?>
		</div>
	</div>
</div>
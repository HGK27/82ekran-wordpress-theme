<?php get_header(); ?>
<div id="bolum1genel">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<?php if(has_post_thumbnail()): ?>

	
<div id="yazianaresim">
			<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
			<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"  style="width:100%"></img></a>
</div>
<div id="yazicerceve">
	<div id="yazi">			
			<?php the_content(); ?>
		</div>
	</div>	
<?php 
endif;
endwhile;
endif;
?>	
</div>
<?php get_footer(); ?>

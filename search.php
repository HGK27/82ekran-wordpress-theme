<?php get_header(); ?>

	<div class="container-fluid">
		<div class="row">
			<img class="search-img" src="<?php bloginfo('template_directory'); ?>/img/searching.jpg"></img>
		</div>
	</div>		
	<div class="search-panel">
			<form class="form form-inline" >
				<input class="form-control" type="search" placeholder="<?php echo esc_attr_x( 'Ara...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
				<button class="btn btn-dark" type="submit">ARA</button>
			</form>
	</div>

<div class="container search-column" id="stepPop">
	<div class="row">
<?php if(have_posts())  { ?> 
<?php
while(have_posts()) : the_post(); 	
if(has_post_thumbnail()): 
?>
				<div class="col-lg-3" id="popImg">
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
            <a href="<?php the_permalink(); ?>"><img class="rounded float-left w-100" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"></a>
        </div>
        <div class="col-lg-9" id="popWrite">
          <div class="card w-100 border-0">
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <small class="text-muted"><?php the_author(); ?>, <?php echo get_the_date(); ?></small>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>			
					
<?php endif; ?>
<?php endwhile; ?>		
				<?php }
				else {echo '<div class="searchNotFou">Aradığınız bulunamadı.</div>'; }
				?>
</div>
</div>

<div class="container category-pagination">
<?php get_template_part( '/pagination' ); ?>
</div>
<?php get_footer(); ?>
 

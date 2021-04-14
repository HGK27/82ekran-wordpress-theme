<?php get_header(); ?>	

<div class="cointainer-fluid" id="authorPage">
	<div class="container">
		<div class="row">

<?php if(have_posts()) : the_post();  ?>

			<div class="col col-12">
				<div class="d-flex justify-content-center">
				 	<img class="img-rounded"><?php echo get_avatar( get_the_author_meta('ID'), 150);?></img>
				</div>
			</div>
			<div class="col col-12 d-flex justify-content-center authorSocial">
					<a class="authorSocial-facebook" href="<?php the_author_meta('facebook');?>"> 
						<svg class="icon icon-facebook">
							<use xlink:href="#icon-facebook"></use>
						</svg>
					</a>
					<a class="authorSocial-instagram" href="<?php the_author_meta('instagram');?>">
						<svg class="icon icon-instagram">
							<use xlink:href="#icon-instagram"></use>
						</svg>
					</a>
					<a class="authorSocial-twitter" href="<?php the_author_meta('twitter');?>">
						<svg class="icon icon-twitter">
							<use xlink:href="#icon-twitter"></use>
						</svg>
					</a>
			</div>	
			<div class="col col-12" id="authorDesc">
				<h3><?php the_author(); ?></h3>	
				<p><?php the_author_description(); ?></p>
				
			</div>
<br>

<?php endif ?>
		</div>
	</div>
</div>

  <div class="container" id="stepPop">
    <div class="row">
<?php rewind_posts(); ?>
<?php
while(have_posts()) : the_post(); 	
if(has_post_thumbnail()): 
?>

        <div class="col-md-4">
            <div class="cart">
					<div class="cart-image">
							<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
							<a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"></a>
					</div>
			        <div class="cart-header">
                    <small class="text-muted"><?php the_author(); ?>, <?php echo get_the_date(); ?></small>
                	</div>
                
                    <h4 class="card-title">
                    <a href="<?php the_permalink(); ?>" > <?php the_title(); ?> </a>
                    </h4>               
                    <p class="card-text"><?php the_excerpt(); ?></p>
        	</div>            
        </div> 
      
<?php 
endif;
endwhile;
?>
	</div>
</div>

<div class="container category-pagination">
<?php get_template_part( '/pagination' ); ?>
</div>

<?php get_footer(); ?>
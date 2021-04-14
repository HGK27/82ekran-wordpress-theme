<?php get_header(); ?>

<div class="container" id="categoryName">
    <h1>
      <?php
      single_term_title()
      ?>
    </h1>
</div>

<?php
if(have_posts()) : 
while(have_posts()) : 
the_post();
if(has_post_thumbnail()): 

?>
<div class="container category-page">
<div class="row">
    <div class="col-lg-3">
      <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" width="100%"/></a>
    </div>
    <div class="col-lg-9">
      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <span class="yazaryazistili"><?php the_author(); ?>, <?php echo get_the_date(); ?></span>
      <p><?php echo the_excerpt(); ?><p>
    </div>
</div>
</div>
      
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<div class="container category-pagination">
<?php get_template_part( '/pagination' ); ?>
</div>

<?php get_footer(); ?>

<script>
$( document ).ready(function() {
  $(".logo").css("display","none")
});
</script>
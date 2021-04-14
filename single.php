<?php get_header(); ?>

<?php
 if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<?php if(has_post_thumbnail()): ?>


  <div class="container-fluid">
    <div class="row">
      <div class="col-12 nopadding">
        <div id="singlePageTittle">
          <h1><?php the_title(); ?></h1>
        </div>
        <div id="imgFrame">
          <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
          <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"></img></a>
        </div>
      </div>
    </div>
    <div class="container" id="postArt">
      <div class="row">
        <div class="col-md-8">
          <div id="singlePageJustfy">
          <p><?php the_content(); ?></p>
          <br>
          </div>
		    	<h5 class="blockquote-footer text-right"><?php the_author_posts_link(); ?>&nbsp; - &nbsp;<?php echo get_the_date(); ?></h5>
          <br>
          	<div id="sosyalmedyapaylas">
              <a target="_blank" title="Facebook'ta Paylaş" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>">
              <svg class="icon icon-facebook">
                <use xlink:href="#icon-facebook"></use>
              </svg>
              paylaş
              </a>
              <a title="Twitter'da Paylaş" href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-show-count="false" data-size="large" data-text="<?php get_the_title ?>">
              <svg class="icon icon-twitter">
                <use xlink:href="#icon-twitter"></use>
              </svg>
               tweetle
               </a>
            </div>
        </div>

        <div class="col-md-4">
          <div id="sideBarSticky">
            <div clas="col-12">
              <div id="tagler">
                <?php	 the_tags('<ul><li><h6>','</h6></li><li><h6>','</h6></li></ul>'); ?>
              </div>
            </div>
<?php 
endif;
endwhile;
endif;
?>
          <div clas="col-12">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); ?>


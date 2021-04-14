<?php get_header(); ?>

<div class="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
<?php 
query_posts('showposts=1&orderby=date&cat=684'); 
while (have_posts()) : the_post();
if(has_post_thumbnail()):
?>
          <div class="carousel-item active">
            <a href="<?php the_permalink(); ?>">
              <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
              <img class="d-block w-100" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
              <div class="container carousel-caption d-none d-md-block ">
                <h5 class="justify-content-center"><?php the_title(); ?></h5>
                <div class="justify-content-center"><?php the_excerpt(); ?></div>
              </div>
            </a>
          </div>
 
<?php 
endif;
endwhile;
?> 
<?php 
query_posts('showposts=4&orderby=date&cat=76');
while (have_posts()) : the_post();
if(has_post_thumbnail()):
?>
          <div class="carousel-item">
            <a href="<?php the_permalink(); ?>">
              <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
              <img class="d-block w-100" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
              <div class="container carousel-caption d-none d-md-block">
                <h5 class="justify-content-center"><?php the_title(); ?></h5>
                <div class="justify-content-center"><?php the_excerpt(); ?></div>
              </div>
            </a>
          </div>
<?php 
endif;
endwhile;
?>         
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</div>

    <div class="news container">
      <div class="row">
        <div class="col-12 news-title">Tazeler</div>
        <div class="regular slider">
        <?php
query_posts('showposts=6&orderby=date');
if(have_posts()) : 
while(have_posts()) : the_post(); 	
?>
          <div class="news-item">
            <a href="<?php the_permalink(); ?>">
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
                <img class="card-img-top" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                <h5><?php the_title(); ?></h5>            
                <p><?php the_excerpt(); ?></p>
                <div class="news-author"><?php the_author(); ?> <span class="news-date"><?php echo get_the_date(); ?></span></div>
            </a>
          </div>
 <?php
endwhile;
endif;
 ?>
        </div>
      </div>
    </div>


    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-6 banner-spot">
            <div class="banner-title">
              KISA FİLM ZAMANI
            </div>
            <div class="banner-text">
              Festival dönemini tamamlamış onlarca kısa film 82ekran.com'da!
            </div>
            <a href="/index.php?cat=709" class="btn banner-button"> Daha fazlası için <span></span><span></span></a>
          </div>
          <div class="col-6 banner-img">
            <img src="<?php bloginfo('template_directory'); ?>/img/banner-tarantino.png">
          </div>
        </div>
      </div>
    </div>

<div class="news container">
      <div class="row">
        <div class="col-12 news-title">Dijital Platformlar</div>
        <div class="regular slider">
        <?php
query_posts('showposts=6&orderby=orderby=date&cat=2');
if(have_posts()) : 
while(have_posts()) : the_post(); 	
?>
          <div class="news-item">
            <a href="<?php the_permalink(); ?>">
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
                <img class="card-img-top" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                <h5><?php the_title(); ?></h5>            
                <p><?php the_excerpt(); ?></p>
                <div class="news-author"><?php the_author(); ?> <span class="news-date"><?php echo get_the_date(); ?></span></div>
            </a>
          </div>
 <?php
endwhile;
endif;
 ?>
        </div>
      </div>
    </div>


<div id="stepTwo" class="cointainer-fluid">
  <div class="container">
  <div class="row" id="stepTwoRow">

    <div class="col-lg-7" id="honeyComb">
      <ul id="categories" class="clr">
        <li class="pusher"></li>
<?php
$x=1;
query_posts('showposts=4&orderby=date&cat=5');
if(have_posts()) : 
while(have_posts()) : the_post(); 
?> 
	      <li>
          <div class="honeyComb-col" data="<?php echo "image",$x; ?>">            
              <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
              <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/> 
              <a class="honeyComb-link" href="<?php the_permalink(); ?>" target="_blank">Devamını oku</a>
         </div>         
	      </li>
            
<?php
$x=$x+1;
endwhile;
endif;
 ?>
      </ul>
<?php
$y=1;
query_posts('showposts=4&orderby=date&cat=5');
if(have_posts()) : 
while(have_posts()) : the_post(); 	
?> 
 
  <span class="<?php echo "honeyComb-spot honeyComb-title",$y; ?>"><?php the_title(); ?></span>
 
<?php
$y=$y+1;
endwhile;
endif;
 ?>
    </div>
  
      <div class="col-lg-5 honeyComb-illustras">
        <img src="<?php bloginfo('template_directory'); ?>/img/82sitebanner2.png" width="100%" height="auto" />
      </div>

  </div>  
  </div>   
</div>

<div class="news container">
      <div class="row">
        <div class="col-12 news-title">Haberler</div>
        <div class="regular slider">
        <?php
query_posts('showposts=6&orderby=date&cat=689');
if(have_posts()) : 
while(have_posts()) : the_post(); 	
?>
          <div class="news-item">
            <a href="<?php the_permalink(); ?>">
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
                <img class="card-img-top" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                <h5><?php the_title(); ?></h5>            
                <p><?php the_excerpt(); ?></p>
                <div class="news-author"><?php the_author(); ?> <span class="news-date"><?php echo get_the_date(); ?></span></div>
            </a>
          </div>
 <?php
endwhile;
endif;
 ?>
        </div>
      </div>
    </div>

    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-6 banner-spot">
            <div class="banner-title">
              Youtube Sayfamıza Baktınız Mı?
            </div>
            <a href="https://www.youtube.com/channel/UCexQxTpgok1VUhqMmXjwsgA" class="btn banner-button"> Daha fazlası için <span></span><span></span></a>
          </div>
          <div class="col-6 banner-img">
            <img src="<?php bloginfo('template_directory'); ?>/img/banner-spiderman.png">
          </div>
        </div>
      </div>
    </div>

    <div class="news container">
      <div class="row">
        <div class="col-12 news-title">Ekran Lobisi</div>
        <div class="regular slider">
<?php
query_posts('showposts=6&orderby=orderby=date&cat=6');
if(have_posts()) : 
while(have_posts()) : the_post(); 	
?>
          <div class="news-item">
            <a href="<?php the_permalink(); ?>">
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
                <img class="card-img-top" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                <h5><?php the_title(); ?></h5>            
                <p><?php the_excerpt(); ?></p>
                <div class="news-author"><?php the_author(); ?> <span class="news-date"><?php echo get_the_date(); ?></span></div>
            </a>
          </div>
 <?php
endwhile;
endif;
 ?>
        </div>
      </div>
    </div>

    <div class="container-fluid" id="catPop">
      <div class="row">
<?php
query_posts('showposts=6&orderby=rand');
if(have_posts()) : 
while(have_posts()) : the_post(); 	
?>
  <div class="col-4">
    
      <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
      <a href="<?php the_permalink(); ?>"><img class="rounded float-left w-100" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"></a>
      <div id="catPopTittle"><h5><?php the_title(); ?></h5></div>
  </div>


<?php 
endwhile;
endif;
?>
      </div>
    </div>


<div class="banner spotify-column">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-sm-6 banner-spot">
            <div class="banner-title">
              <svg class="icon icon-spotify"><use xlink:href="#icon-spotify"></use></svg> 82ekran Çalma Listeleri
            </div>
            <a href="/index.php?cat=775" class="btn banner-button"> Dinlemeye Başla <span></span><span></span></a>
          </div>
          <div class="col-sm-6 banner-img">
          <img src="<?php bloginfo('template_directory'); ?>/img/lalaland.png">
          </div>
        </div>
      </div>
    </div>


<?php get_footer(); ?>

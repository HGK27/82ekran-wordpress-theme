<?php 


/* 


Template Name: ekibimiz 


*/ 


?> 

<?php get_header();?>
<div id="teamGeneral">
<img src="<?php bloginfo('template_directory'); ?>/img/westWorldHorse.png?v=1" width="100%">
<div class="container-fluid">
<div class="container" id="teamPage">
	<div class="row">
		
<?php 
$users = get_users();
unset($users[0],$users[3],$users[8],$users[13]);
foreach ($users as $user) 
{
	
?>
					<div class="col-lg-4">
							<div class="card cart-margin">
									<div class="img-circle"><?php echo get_avatar($user->ID);?></div>
									<div class="card-body">
										<h5 class="card-title text-center"><a href="<?php echo get_bloginfo('url')."/author/"; echo $user->user_login; ?>"> <?php echo $user->display_name; ?></a></h5><br>
										<p class="card-text"><?php echo $user->description; ?></p>
									</div>
									<div class="card-footer bg-dark d-flex justify-content-center">
										<div class="authorSocial">
											<a href="<?php the_author_meta('facebook');?>"> 
												<svg class="icon icon-facebook">
													<use xlink:href="#icon-facebook"></use>
												</svg>
											</a>
											<a href="<?php the_author_meta('instagram');?>">
												<svg class="icon icon-instagram">
													<use xlink:href="#icon-instagram"></use>
												</svg>
											</a>
											<a href="<?php the_author_meta('twitter');?>">
												<svg class="icon icon-twitter">
													<use xlink:href="#icon-twitter"></use>
												</svg>
											</a>
										</div>	
									</div>
							</div>
					</div>
<?php }  ?>

	</div>	
</div>
</div>
<?php  get_footer(); ?> 
</div>
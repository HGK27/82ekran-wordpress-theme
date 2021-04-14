<div id="dynamicSide">
<ul>
<?php if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('sidebar')):
      endif; ?>
</ul>
</div>
<h4 id="sagbolumbaslik">benzer işler</h4>

<?php
                    $orig_post = $post;
                    global $post;
                    $tags = wp_get_post_tags($post->ID);
             
                    if ($tags) {
                        $tag_ids = array();
                    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                        $args=array(
                            'tag__in' => $tag_ids,
                            'post__not_in' => array($post->ID),
                            'posts_per_page'=>4, // kaç tane benzer yazı yazılacaksa o kadar sayı yazın
                            'orderby'    =>'rand',
                            'caller_get_posts'=>4
                        );
             
                    $my_query = new wp_query( $args );
             
                    while( $my_query->have_posts() ) {
                        $my_query->the_post();
                    ?>


<div id="sideBarRihtArt">
						<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"  style="width:100%"></img></a>

	<div id="sideBarRihtArtTittle"><h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5></div>

</div>				
                    <?php }
                    }
                    $post = $orig_post;
                    wp_reset_query();
                    ?>
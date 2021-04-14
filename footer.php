<footer class="home-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-6">
        <?php wp_list_categories( array(
            'orderby'    => 'name',
            'exclude' => array( 1 ,684, 76),
            'title_li'   => __( '' ),
        ) ); ?> 
      </div>
      <div class="col-sm-3 col-6">
        <?php wp_list_pages( array(
            'orderby'    => 'name',
            'title_li'   => __( '' ),
        ) ); ?> 
      </div>
      <div class="col-sm-6 socialmedia">
            <a href="https://www.facebook.com/82ekran/">
              <svg class="icon icon-facebook">
                <use xlink:href="#icon-facebook"></use>
              </svg>
            </a>
            <a href="https://twitter.com/82ekran"><svg class="icon icon-twitter">
                <use xlink:href="#icon-twitter"></use>
              </svg>
            </a>
            <a href="https://www.instagram.com/82ekran/">
              <svg class="icon icon-instagram">
                <use xlink:href="#icon-instagram"></use>
              </svg>
            </a>
            <a href="https://www.youtube.com/channel/UCexQxTpgok1VUhqMmXjwsgA">
              <svg class="icon icon-youtube">
                <use xlink:href="#icon-youtube"></use>
              </svg>
            </a>
      </div>
    </div>
</div>

  <div class="text-light col-12 copyright">
   82ekran sitesinin bütün hakları saklıdır. - 2021
  </div>

<?php wp_footer(); ?>

 </footer>
</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136775075-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136775075-1');
</script>

  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/carousel.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/util.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slick.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
</body>
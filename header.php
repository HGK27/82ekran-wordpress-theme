<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="google-site-verification" content="hcM9whxq_wCOQk64JRqMMPx9-APZBc7j9ffb5yW6YmM" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('-'); ?></title>
<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
       echo "82 ekran ,Netflix, BluTv dizileri, filmleri ve sinema hakkında yazıların bulunduğu bir platformdur - "; bloginfo('description');
    }
    ?>" />
<meta name="author" content="82ekran">
<meta http-equiv="content-language" content="tr">
<meta name="robots" content="All, Index, Follow">
<meta name="googlebot" content="All, Index, Follow">
<meta name="rating" content="General">

<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/ikon.png" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/ikon.png" type="image/x-icon" />

  <meta property="og:image" 		 content="<?php echo get_the_post_thumbnail_url(); ?>"/>
  <meta property="og:description" content="<?php if ( is_single() ) {
        echo get_the_excerpt(); 
    } else {
       echo "82 ekran ,Netflix, BluTv dizileri, filmleri ve sinema hakkında yazıların bulunduğu bir platformdur - "; bloginfo('description');
    }
    ?>"/>
  <meta property="og:title"       content="<?php if ( is_single() ) {
        echo get_the_title();
    } else {
        bloginfo('name'); echo "-"; bloginfo('description');
    }
    ?>" />
  <meta property="og:locale" content="tr_TR" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="82ekran" />
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:description" content="<?php if ( is_single() ) {
        echo get_the_excerpt(); 
    } else {
       echo "82 ekran ,Netflix, BluTv dizileri, filmleri ve sinema hakkında yazıların bulunduğu bir platformdur - "; bloginfo('description');
    }
    ?>"/>
  <meta name="twitter:title" content="<?php if ( is_single() ) {
        echo get_the_title();
    } else {
        bloginfo('name'); echo "-"; bloginfo('description');
    }
    ?>"/>
  <meta name="twitter:site" content="@82ekran"/>
  <meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url(); ?>"/>
  <meta name="twitter:creator" content="@82ekran"/>

<link href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="all" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
</head>

<body>
<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1"
    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <symbol id="icon-spotify" viewBox="0 0 16 16">
      <path d="M8 0c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.559-8-8-8zM11.681 11.559c-0.159 0.241-0.441 0.319-0.681 0.159-1.881-1.159-4.241-1.4-7.041-0.759-0.281 0.081-0.519-0.119-0.6-0.359-0.081-0.281 0.119-0.519 0.359-0.6 3.041-0.681 5.681-0.4 7.759 0.881 0.281 0.119 0.322 0.438 0.203 0.678zM12.641 9.359c-0.2 0.281-0.559 0.4-0.841 0.2-2.159-1.319-5.441-1.719-7.959-0.919-0.319 0.081-0.681-0.081-0.759-0.4-0.081-0.319 0.081-0.681 0.4-0.759 2.919-0.881 6.519-0.441 9 1.081 0.238 0.119 0.359 0.519 0.159 0.797zM12.719 7.119c-2.559-1.519-6.841-1.681-9.281-0.919-0.4 0.119-0.8-0.119-0.919-0.481-0.119-0.4 0.119-0.8 0.481-0.919 2.841-0.841 7.519-0.681 10.481 1.081 0.359 0.2 0.481 0.681 0.281 1.041-0.203 0.278-0.681 0.397-1.044 0.197z"></path>
      </symbol>
      <symbol id="icon-chevron-left" viewBox="0 0 21 28">
        <path
          d="M18.297 4.703l-8.297 8.297 8.297 8.297c0.391 0.391 0.391 1.016 0 1.406l-2.594 2.594c-0.391 0.391-1.016 0.391-1.406 0l-11.594-11.594c-0.391-0.391-0.391-1.016 0-1.406l11.594-11.594c0.391-0.391 1.016-0.391 1.406 0l2.594 2.594c0.391 0.391 0.391 1.016 0 1.406z">
        </path>
      </symbol>
      <symbol id="icon-chevron-right" viewBox="0 0 19 28">
        <path
          d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z">
        </path>
      </symbol>
      <symbol id="icon-home" viewBox="0 0 32 32">
        <path d="M32 18.451l-16-12.42-16 12.42v-5.064l16-12.42 16 12.42zM28 18v12h-8v-8h-8v8h-8v-12l12-9z"></path>
      </symbol>
      <symbol id="icon-search" viewBox="0 0 32 32">
        <path
          d="M31.008 27.231l-7.58-6.447c-0.784-0.705-1.622-1.029-2.299-0.998 1.789-2.096 2.87-4.815 2.87-7.787 0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12c2.972 0 5.691-1.081 7.787-2.87-0.031 0.677 0.293 1.515 0.998 2.299l6.447 7.58c1.104 1.226 2.907 1.33 4.007 0.23s0.997-2.903-0.23-4.007zM12 20c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8z">
        </path>
      </symbol>
      <symbol id="icon-arrow-left" viewBox="0 0 32 32">
        <path d="M1 16l15 15v-9h16v-12h-16v-9z"></path>
      </symbol>
      <symbol id="icon-facebook" viewBox="0 0 32 32">
        <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
      </symbol>
      <symbol id="icon-instagram" viewBox="0 0 32 32">
        <path
          d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z">
        </path>
        <path
          d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z">
        </path>
        <path
          d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z">
        </path>
      </symbol>
      <symbol id="icon-spotify" viewBox="0 0 32 32">
        <path
          d="M16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.119-16-16-16zM23.363 23.119c-0.319 0.481-0.881 0.637-1.363 0.319-3.762-2.319-8.481-2.8-14.081-1.519-0.563 0.163-1.037-0.238-1.2-0.719-0.162-0.563 0.237-1.038 0.719-1.2 6.081-1.363 11.363-0.8 15.519 1.762 0.563 0.238 0.644 0.875 0.406 1.356zM25.281 18.719c-0.4 0.563-1.119 0.8-1.681 0.4-4.319-2.637-10.881-3.438-15.919-1.837-0.638 0.163-1.362-0.163-1.519-0.8-0.162-0.637 0.162-1.363 0.8-1.519 5.838-1.762 13.037-0.881 18 2.163 0.475 0.238 0.719 1.038 0.319 1.594zM25.438 14.238c-5.119-3.037-13.681-3.363-18.563-1.838-0.8 0.238-1.6-0.238-1.838-0.963-0.237-0.8 0.237-1.6 0.963-1.838 5.681-1.681 15.038-1.363 20.962 2.162 0.719 0.4 0.962 1.363 0.563 2.081-0.406 0.556-1.363 0.794-2.087 0.394z">
        </path>
      </symbol>
      <symbol id="icon-twitter" viewBox="0 0 32 32">
        <path
          d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z">
        </path>
      </symbol>
      <symbol id="icon-youtube" viewBox="0 0 32 32">
        <path
          d="M31.681 9.6c0 0-0.313-2.206-1.275-3.175-1.219-1.275-2.581-1.281-3.206-1.356-4.475-0.325-11.194-0.325-11.194-0.325h-0.012c0 0-6.719 0-11.194 0.325-0.625 0.075-1.987 0.081-3.206 1.356-0.963 0.969-1.269 3.175-1.269 3.175s-0.319 2.588-0.319 5.181v2.425c0 2.587 0.319 5.181 0.319 5.181s0.313 2.206 1.269 3.175c1.219 1.275 2.819 1.231 3.531 1.369 2.563 0.244 10.881 0.319 10.881 0.319s6.725-0.012 11.2-0.331c0.625-0.075 1.988-0.081 3.206-1.356 0.962-0.969 1.275-3.175 1.275-3.175s0.319-2.587 0.319-5.181v-2.425c-0.006-2.588-0.325-5.181-0.325-5.181zM12.694 20.15v-8.994l8.644 4.513-8.644 4.481z">
        </path>
      </symbol>
    </defs>
  </svg>

<div id="upperScreen">
    <a href="javascript:;"><img alt="yukari cik" title="yukari cik" id="upper" src="<?php bloginfo('template_directory'); ?>/img/up-arrow.png"></a>
</div>
<div id="leftMenu">
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
			<div class="overlay-content ">
        <ul>
        <li class="ikon82"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/seksenikiekran.png" width="100%" height="auto;" /></a></li>
            
            <div id="socialMedia">  
              <li>  
                <div class="d-flex justify-content-center">  
                  <a href="https://www.facebook.com/82ekran/"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a>                  
                  <a href="https://twitter.com/82ekran"><svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg></a>
                  <a href="https://www.instagram.com/82ekran/"><svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg></a>
                  <a href="https://open.spotify.com/user/rh8f1syp52mqhwqqdjsvoow6g?si=Y0zsm-lRQbq17ms9QCgjlA">
                  <svg class="icon icon-spotify"><use xlink:href="#icon-spotify"></use></svg></a> 
                  <a href="https://www.youtube.com/channel/UCexQxTpgok1VUhqMmXjwsgA"><svg class="icon icon-youtube"><use xlink:href="#icon-youtube"></use></svg></a>
                </div>   
            </li>   
            </div>
            
        
        <a><?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?></a> 
        </ul>   
			</div>
	</div>
</div>


<div class="openingSearch">
<div class="triangle-bottom search-triangle-left"></div>
    <div class="openingSearch-column">
      <div class="search-panel">
        <form class="form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
          <input class="form-control" type="search" 
          placeholder="<?php echo esc_attr_x( 'Ara...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
          <button class="homepage-searchicon" type="submit">
             <svg class="icon icon-search">
                <use xlink:href="#icon-search"></use>
              </svg>
            </button>
        </form>
      </div>
      <div class="openingSearch-close">
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="triangle-top search-triangle-right"></div>
 </div>
 

<div class="site-viewport">
    <header class="site-header">
      <a href="http://www.82ekran.com" class="logo">
        <h1>82ekran</h1>
      </a>

      <div class="triangle-top"></div>
      <div class="stickyMenu">
        <div type="button" class="btn menuButton" onclick="openNav()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <ul>
          <li>
            <a class="searchButton">
              <svg class="icon icon-search">
                <use xlink:href="#icon-search"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url(); ?>">
              <svg class="icon icon-home">
                <use xlink:href="#icon-home"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/82ekran/">
              <svg class="icon icon-facebook">
                <use xlink:href="#icon-facebook"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/82ekran">
              <svg class="icon icon-twitter">
                <use xlink:href="#icon-twitter"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/82ekran/">
              <svg class="icon icon-instagram">
                <use xlink:href="#icon-instagram"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UCexQxTpgok1VUhqMmXjwsgA">
              <svg class="icon icon-youtube">
                <use xlink:href="#icon-youtube"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://open.spotify.com/user/rh8f1syp52mqhwqqdjsvoow6g?si=Y0zsm-lRQbq17ms9QCgjlA">
                  <svg class="icon icon-spotify"><use xlink:href="#icon-spotify"></use></svg></a> 
          </li>
        </ul>
      </div>
      <div class="triangle-bottom"></div>
    </header>
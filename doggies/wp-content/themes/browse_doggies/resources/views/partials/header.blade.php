<header class="banner">
  	<div class="container">
    <!-- <a class="brand" href="{{ home_url('/') }}"></a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="{{ home_url('/') }}"><img src="<?php bloginfo('template_directory'); ?>/../dist/images/logo.png" alt="Logo"></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item  home">
        			<a class="nav-link" href="{{ home_url('/') }}">HOME</a>
      			</li>
      			<li class="nav-item blog">
        			<a class="nav-link" href="{{ home_url('/blog/') }}">BLOG</a>
      			</li>
      			<li class="nav-item breeds">
        			<a class="nav-link" href="{{ home_url('/breed/') }}">BREEDS</a>
      			</li>
      			<li class="nav-item contact-us">
        			<a class="nav-link" href="{{ home_url('/contact-us/') }}">CONTACT US</a>
      			</li>
      
    			</ul>

  			</div>
		</nav>
  	</div>
</header>

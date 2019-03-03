@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

<?php if(is_page('breeds')) :?>  	
 	<h2 class="breeds-header">Filter</h2>
	<div id="filters" class="button-group">  
		<button class="button is-checked" data-filter="*">Show All</button>

		<?php

		$terms = get_terms( array(
			'taxonomy' => 'size',
			'post_type' => 'breed',
    		'hide_empty' => false,
		));

		foreach ($terms as $key => $value) {
			echo '<button class="button" data-filter=".'.$value->slug.'">'.$value->name.'</button>';
		}
		
		?>
  		
	</div>

  	<div class="grid row">
  		<?php

  		$breed_args = array(
			'post_type' => 'breed',
	    	'post_status' => 'publish',
	    	'posts_per_page' => '-1',
		);

		$breed_query = new WP_Query( $breed_args );

		if($breed_query->have_posts()) {
			while($breed_query->have_posts()) { 
				$breed_query->the_post(); 

				$slug = wp_get_post_terms( get_the_id(), 'size', '' );

				$class = '';
				foreach ($slug as $key => $value) {
					$class .= $value->slug.' ';
				}
				?>

			  	<div class="element-item col-md-4 <?php echo $class; ?>">
			  		<a href="<?php echo get_permalink(); ?>">
			  			<div class="img-cont" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-size: cover; background-position: center; height: 250px; border: 2px solid #fbd157; border-radius: 20px;">
			  				<h3 class="name"><?php the_title();?></h3>	
			  			</div>
			  		</a>
			  	</div>

	  	<?php
	  		}
	  	}

	  	?>
	</div>
<?php endif; ?>	
@endsection



<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>
  	<div class="latest-posts">	
	<?php
		$args = array(
			'post_type' => 'post',
	    	'orderby'	=> 'date',
	    	'order' 	=> 'DESC',
	    	'post_status' => 'publish',
	    	'posts_per_page' => '2',
		);

		$the_query = new WP_Query( $args );

		if($the_query->have_posts()) {
			echo '<h2><a href="'.get_site_url().'/blog/">Arfticles</a></h2>';
			while($the_query->have_posts()) { 
				$the_query->the_post();
		    	?>
		    	<a href="<?php echo get_the_permalink(); ?>">
		    		<div class="row">
				    	<div class="col-md-4" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-size: cover; background-position: center; ">
				    	</div>	
				    	<div class="col-md-8">
				    		<h4><?php the_title();?></h4>
				    		<small><?php echo get_the_date();?></small>
				    		<br>
				    		<p><?php echo get_the_excerpt(); ?></p>
				    	</div>
			    	</div>
			    </a>
		    	<?php
			}
		}
	?>	
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
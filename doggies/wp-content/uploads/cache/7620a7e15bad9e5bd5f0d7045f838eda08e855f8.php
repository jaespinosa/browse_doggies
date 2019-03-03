<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php if(!have_posts()): ?>
    <div class="alert alert-warning">
      <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

    </div>
    <?php echo get_search_form(false); ?>

  <?php endif; ?>

  <div class="blog-page">
    <h2 class="blog-header">Arfticles</h2>
  <?php while(have_posts()): ?> <?php the_post() ?> 
    <div class="row">
      <div class="col-md-4" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">  
      </div>
      <div class="col-md-8">
        <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
    </div>
  <?php endwhile; ?>
  </div>

  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
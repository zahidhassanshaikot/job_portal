<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="application-name" content="">
	<meta name="description" content="">
  <title>Index</title>
  
  <?php echo $__env->make('back-end.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->yieldContent('content'); ?>

  
<?php if(auth()->guard()->check()): ?>     
  <?php echo $__env->make('popup-message/modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

  <?php echo $__env->make('back-end.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

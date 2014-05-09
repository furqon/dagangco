<?php /* have to take from routing config */ ?>

<section class="content-header">
	<!-- page title -->
	<h1><?php echo (isset($maintitle) && $maintitle !== '') ? $maintitle : 'Title' ?><small> <?php echo (isset($subtitle) && $subtitle !== '') ? $subtitle : 'Sub Title' ?></small></h1>
	
	<!-- breadcrumb -->
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Index</li>
  </ol>
</section>
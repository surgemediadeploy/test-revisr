<?php /*
Template Name: Quote Page
*/ ?>

<h1> Your Quote: </h1>
<h3> To Be Delivered by: <?php the_field('proposal_date'); ?></h3> 
<div class = ' inline_quote row' >
	<div class = 'info_card col-md-8'>
 <h4> Your Proposal: </h4>
 <p> <?php the_field('proposals');?> </p>
	</div>

	<div class = 'info_card col-md-4'>
		 <h4> Current Project Status:</h4>
		 <p> <?php the_field('status'); ?>% Complete </p>
		 <canvas id="myChart" width="200" height="200"></canvas>


	</div>
</div>

<div class = 'inline_quote row' >
	<div class = 'col-md-8'>
	<h3>Description:</h3>
	<?php the_field('description'); ?>
	</div>

	<div class = 'col-md-4'>
	<h3> Video Duration: </h3>
	<?php the_field('duration_of_video') ;?>

	</div>
</div>

<div class = 'inline_quote row' >
	<div class = 'col-md-8'>
	<h3>Script:</h3>
	<?php the_field('script'); ?>
	</div>

	<div class = 'col-md-4'>
	<h3> Videos to be completed: </h3>
	<?php the_field('videos_to_be_completed') ;?>

	</div>
</div>

<div class = 'inline_quote row' >
	<div class = 'col-md-4'>
	<h3>Logo Animation:</h3>
	<?php the_field('logo_animation'); ?>
	</div>

	<div class = 'col-md-4'>
	<h3> Motion Graphics: </h3>
	<?php the_field('motion_graphics') ;?>

	</div>

<div class = 'col-md-4'>
	<h3> Project Delivery: </h3>
	<?php the_field('product_delivery') ;?>

	</div>

</div>

<div class = 'row' >
<h2>Total Cost: </h2>
<h3> $ <?php the_field('cost') ?> </h3>
</div>

<div class = 'row'>
<!-- <h2>Your Storyboard: </h2> -->
<?php /* acf_form(array(
'fields' => [],
'submit_value' => 'Update'
)); */ ?>

</div>


<div class="wrap">
<h1 class="wp-heading-inline"><?php echo MvcInflector::pluralize_titleize("Task Details"); ?></h1>

<div class="container">
	<div class="form-group">
	<span for="title"><b> Title :</b></span>
	<?php echo($data->title); ?>
	</div>
	<div class="form-group">
	<span for="description"><b> Description :</b></span>
	<?php echo($data->description); ?>
	</div>
	<div class="form-group">
	<span for="company_name"><b> Company Name :</b></span>
	<?php echo($data->company_name); ?>
	</div>
	<div class="form-group">
	<span for="task_deadline"><b> Task Deadline :</b></span>
	<?php echo($data->task_deadline); ?>
	</div>
	<div class="form-group">
	<span for="created_by"><b> Created By :</b></span>
	<?php echo($data->created_by); ?>
	</div>
	<?php if(!empty($mediafiles)) { ?>
		<div class="form-group">
		<span for="mediafiles"><b> Media Files : </b></span>
		<?php  foreach($mediafiles as $media) { ?>
			<div class="medias" >
			<img src="<?php echo $media->guid; ?>" style="height: 100px; width: 100px;" /> </div>
			<a href ="<?php echo $media->guid; ?>" download > <?php echo(basename($media->guid)); ?> </a>
		<?php } ?>
	<?php } ?>
		</div>
</div>
<h2><?= $title; ?></h2>
	
	<div class="list-group">

		<?php foreach($categories as $category): ?>

		  		<a href="<?php echo site_url(); ?>categories/posts/<?php echo $category['id']?>" class="list-group-item"><?php echo $category['name']; ?></a>
			
		<?php endforeach; ?>

	</div>	


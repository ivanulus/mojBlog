
<h2><?= $title; ?></h2>
	
<?php foreach($posts as $post): ?>
	<small><strong><?php echo $post['name']; ?></strong></small>
	<h3><?php echo $post['title']; ?></h3>
	<small class="post-date">Posted on: <?php echo $post['created_at'] ?></strong></small>
	<p><?php echo word_limiter($post['body'],50); ?></p>
	<p><a class="btn btn-default" href="<?php echo base_url(); ?>posts/view/<?php echo $post['slug'] ?>">Read more</a></p><br>
<?php endforeach; ?>

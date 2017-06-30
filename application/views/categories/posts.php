
<h2><?php echo $title['name']; ?></h2>
	
<?php foreach($posts as $post): ?>
	<h3><?php echo $post['title']; ?></h3>
	<small class="post-date">Posted on: <?php echo $post['created_at'] ?></small>
	<p><?php echo word_limiter($post['body'],50); ?></p>
	<p><a class="btn btn-default" href="<?php echo base_url(); ?>posts/view/<?php echo $post['slug'] ?>">Read more</a></p><br>
<?php endforeach; ?>
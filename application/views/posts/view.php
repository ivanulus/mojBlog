<h3><?php echo $posts['title']; ?></h3>
<p><?php echo $posts['body']; ?></p>
<p><a class="btn btn-default" href="<?php echo base_url(); ?>posts/edit/<?php echo $posts['slug']; ?>">Edit post</a></p>
<?php echo form_open('/posts/delete/' . $posts['id']); ?>
	<input type="submit" value="Delete post" class="btn btn-danger">
</form>

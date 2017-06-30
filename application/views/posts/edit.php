<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>

	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control" value="<?php echo $posts['title']; ?>">
		<input type="hidden" name="id" value="<?php echo $posts['id'] ?>">
	</div>
	<div class="form-group">
		<label>Text</label>
		<textarea id="editor1" name="body" class="form-control"><?php echo $posts['body']; ?></textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-default">Submit</button>
	</div>

</form>
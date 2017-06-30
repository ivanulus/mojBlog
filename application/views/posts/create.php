<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>

	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control">
	</div>
	<div class="form-group">
		<label>Text</label>
		<textarea id="editor1" name="body" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Select Category</label>
		<select class="form-control" name="category">
			<?php foreach($categories as $category):  ?>

				<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>

			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-default">Submit</button>
	</div>

</form>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cyborg/bootstrap.min.css">
  <script src="//cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
	<title></title>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <ul class="nav navbar-nav">
        <li><a class="navbar-brand" href="<?php echo base_url();?>">mojBlog</a></li>
        <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
        <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
        <li><a href="<?php echo base_url(); ?>about">About</a></li>
      </ul> 
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>posts/create">Create post</a></li>
        <li><a href="<?php echo base_url(); ?>categories/create">Create category</a></li>
    </ul> 
  </div>
</nav>
<div class="container-fluid">

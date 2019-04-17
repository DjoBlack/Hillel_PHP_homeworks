<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
</head>
<body>
	<div>
		<a href="/">Home</a>
		<?php  if(isset($_SESSION['user_id'])) { if($_SESSION['user_id'] == $post['user_id']) { ?>
			<form method="POST" action="delete_post.php">
				<input type="hidden" name="id" value="<?php echo $post['id'] ?>">
				<input type="submit" value="Delete">
			</form>
		<?php }} ?>
	</div>
	<div>
		<?php if(!empty($post)) { ?>
			<h2><?php echo $post['title']; ?></h2>
			<a href="user_posts.php?user_id=<?php echo $post['user_id']; ?>">
				<?php echo $post['email']; ?>
			</a>
			 - 
			<?php echo $post['date']; ?></h5>
			<div><?php echo $post['body']; ?></div>
		<?php } else { ?>
				Post is not found!
		<?php } ?>
	</div>
</body>
</html>
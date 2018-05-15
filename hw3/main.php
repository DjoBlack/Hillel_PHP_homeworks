<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>Blog template</title>

	    <!-- Bootstrap core CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	</head>
	<body>
		<h2>My Blog: Anime List</h2>
			<?php foreach($newPost as $post) { ?>
	        	<hr class="featurette-divider">
	        		<div class="row featurette">
			          <div class="col-md-7">
			            <h2 class="featurette-heading"><a href="<?php echo $post['source'] ?>"><?php echo $post['titleRus'] ?><br><span class="text-muted"><?php echo $post['titleEng'] ?></span></a></h2>
			            <p class="lead"><?php echo $post['descr'] ?></p>
			          </div>
			          <div class="col-md-5">
			            <img class="featurette-image img-fluid mx-auto" alt="400x500" src="<?php echo $post['img']?>" data-holder-rendered="true" style="width: 400px; height: 500px;">
			          </div>
			        </div>
			<?php } ?>

	      <!-- FOOTER -->

	      <footer class="container">
	        <p align="center"><a href="#">Back to top</a></p>
	      </footer>
	</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('_part/head'); ?>
	<title>Bumi Manira - Portofolio</title>
</head>
<body>
		<?php $this->load->view('_part/nav'); ?>

  <main class="bg-custom">
  	<div class="container-xl">
  		<div class="py-4 md-5 text-white text-center">
  			<h2 class="fw-bold">Portofolio</h2>
  			<p class="lead"><small>List Portofolio Kami</small></p>
  		</div>
  	</div>

  	<section id="portfolio" class="bg-white py-5">
			<div class="container-xl">
			  <div class="row">
			    <!-- Force next columns to break to new line -->
			    <div class="w-100"></div>
			    
			    <?php foreach ($all_article as $a) {?>
			    <div class="col-12 col-sm-3 py-3">
				    <div class="col">
		          <div class="card shadow-sm">
		            <img src="<?=base_url('_assets/img/article/'.$a->article_thumb) ?>">
		            <div class="card-body">
		              <p class="card-text"><?=$a->article_title; ?></p>
		              <div class="d-flex justify-content-between align-items-center">
		                  <a href="<?=base_url('a/article/'.$a->article_id) ?>" class="btn btn-sm btn-primary col-12">View <i class="fa fa-chevron-right fa-xs"></i></a>
		              </div>
		            </div>
		          </div>
	        	</div>
			    </div>
			  	<?php } ?>
			  </div>
			</div>
  	</section>
  </main>

</body>
</html>
<script type="text/javascript" src="_assets/js/bootstrap.bundle.min.js"></script>
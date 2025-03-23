<div id="portfolio" class="page">
	<div class="col-sm-12 content">
		<h1 class="title">Portfolio</h1>
		<h4 class="mt-5">
			A short view about my most relevant work!
		</h4>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs portfolio-filters justify-content-center mt-5" role="tablist">
			<li class="nav-item mr-2">
				<a class="nav-link btn active" data-toggle="tab" href="#freelance" role="tab">Freelance</a>
			</li>
			<li class="nav-item mr-2">
				<a class="nav-link btn" data-toggle="tab" href="#nesn" role="tab">NESN</a>
			</li>
			<li class="nav-item mr-2">
				<a class="nav-link btn" data-toggle="tab" href="#smashflay" role="tab">Smashflay</a>
			</li>
			<li class="nav-item mr-2">
				<a class="nav-link btn" data-toggle="tab" href="#viami" role="tab">Viami International</a>
			</li>
			<li class="nav-item">
				<a class="nav-link btn" data-toggle="tab" href="#adverweb" role="tab">Adverweb</a>
			</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content mb-5">
			<div class="tab-pane active fade show" id="freelance" role="tabpanel">
				<div class="clearfix">
                    <ul class="list-unstyled portfolio-grid row mt-5">
	            		<?php foreach ($portfolio["freelance"] as $key => $value): ?>
		                    <li class="freelance_<?php echo $key; ?>">
		                    	<img src="<?php echo $routeUploads; ?>portfolio/<?php echo $value["img"]; ?>" class="img-fluid" alt="">
		                        <div class="shadow" data-title="<?php echo $value["title"]; ?>" data-description="<?php echo $value["description"]; ?>" data-date="<?php echo $value["date"]; ?>" data-url="<?php echo $value['url']; ?>" data-categories="<?php echo $value["categories"]; ?>" data-for="<?php echo $value["for"]; ?>" data-as="<?php echo $value["as"]; ?>" data-for-url="<?php echo $value["for_url"]; ?>"  data-previous="freelance_<?php echo ($key > 0) ? ($key-1) : (count($portfolio["freelance"])-1); ?>" data-next="freelance_<?php echo ($key < (count($portfolio["freelance"])-1)) ? ($key+1) : "0";  ?>">
						    		<p><span><?php echo $value["title"]; ?></span></p>
						    	</div>                                               
		                    </li>
		                <?php endforeach; ?>
                    </ul>
                </div>
			</div>
			<div class="tab-pane fade" id="nesn" role="tabpanel">
				<div class="clearfix">
                    <ul class="list-unstyled portfolio-grid row mt-5">
	            		<?php foreach ($portfolio["nesn"] as $key => $value): ?>
		                    <li class="nesn_<?php echo $key; ?>">
		                    	<img src="<?php echo $routeUploads; ?>portfolio/<?php echo $value["img"]; ?>" class="img-fluid" alt="">
		                        <div class="shadow" data-title="<?php echo $value["title"]; ?>" data-description="<?php echo $value["description"]; ?>" data-date="<?php echo $value["date"]; ?>" data-url="<?php echo $value['url']; ?>" data-categories="<?php echo $value["categories"]; ?>" data-for="<?php echo $value["for"]; ?>" data-as="<?php echo $value["as"]; ?>" data-for-url="<?php echo $value["for_url"]; ?>"  data-previous="nesn_<?php echo ($key > 0) ? ($key-1) : (count($portfolio["nesn"])-1); ?>" data-next="nesn_<?php echo ($key < (count($portfolio["nesn"])-1)) ? ($key+1) : "0";  ?>">
						    		<p><?php echo $value["title"]; ?></p>
						    	</div>                                               
		                    </li>
		                <?php endforeach; ?>
                    </ul>
                </div>
			</div>
			<div class="tab-pane fade" id="smashflay" role="tabpanel">
				<div class="clearfix">
                    <ul class="list-unstyled portfolio-grid row mt-5">
	            		<?php foreach ($portfolio["smashflay"] as $key => $value): ?>
		                    <li class="smashflay_<?php echo $key; ?>">
		                    	<img src="<?php echo $routeUploads; ?>portfolio/<?php echo $value["img"]; ?>" class="img-fluid" alt="">
		                        <div class="shadow" data-title="<?php echo $value["title"]; ?>" data-description="<?php echo $value["description"]; ?>" data-date="<?php echo $value["date"]; ?>" data-url="<?php echo $value['url']; ?>" data-categories="<?php echo $value["categories"]; ?>" data-for="<?php echo $value["for"]; ?>" data-as="<?php echo $value["as"]; ?>" data-for-url="<?php echo $value["for_url"]; ?>"  data-previous="smashflay_<?php echo ($key > 0) ? ($key-1) : (count($portfolio["smashflay"])-1); ?>" data-next="smashflay_<?php echo ($key < (count($portfolio["smashflay"])-1)) ? ($key+1) : "0";  ?>">
						    		<p><?php echo $value["title"]; ?></p>
						    	</div>                                               
		                    </li>
		                <?php endforeach; ?>
                    </ul>
                </div>
			</div>
			<div class="tab-pane fade" id="viami" role="tabpanel">
				<div class="clearfix">
                    <ul class="list-unstyled portfolio-grid row mt-5">
	            		<?php foreach ($portfolio["viami"] as $key => $value): ?>
		                    <li class="viami_<?php echo $key; ?>">
		                    	<img src="<?php echo $routeUploads; ?>portfolio/<?php echo $value["img"]; ?>" class="img-fluid" alt="">
		                        <div class="shadow" data-title="<?php echo $value["title"]; ?>" data-description="<?php echo $value["description"]; ?>" data-date="<?php echo $value["date"]; ?>" data-url="<?php echo $value['url']; ?>" data-categories="<?php echo $value["categories"]; ?>" data-for="<?php echo $value["for"]; ?>" data-as="<?php echo $value["as"]; ?>" data-for-url="<?php echo $value["for_url"]; ?>" data-previous="viami_<?php echo ($key > 0) ? ($key-1) : (count($portfolio["viami"])-1); ?>" data-next="viami_<?php echo ($key < (count($portfolio["viami"])-1)) ? ($key+1) : "0";  ?>">
						    		<p><?php echo $value["title"]; ?></p>
						    	</div>                                               
		                    </li>
		                <?php endforeach; ?>
                    </ul>
                </div>
			</div>
			<div class="tab-pane fade" id="adverweb" role="tabpanel">
				<div class="clearfix">
                    <ul class="list-unstyled portfolio-grid row mt-5">
	            		<?php foreach ($portfolio["aw"] as $key => $value): ?>
		                    <li class="aw_<?php echo $key; ?>">
		                    	<img src="<?php echo $routeUploads; ?>portfolio/<?php echo $value["img"]; ?>" class="img-fluid" alt="">
		                        <div class="shadow" data-title="<?php echo $value["title"]; ?>" data-description="<?php echo $value["description"]; ?>" data-date="<?php echo $value["date"]; ?>" data-url="<?php echo $value['url']; ?>" data-categories="<?php echo $value["categories"]; ?>" data-for="<?php echo $value["for"]; ?>" data-as="<?php echo $value["as"]; ?>" data-for-url="<?php echo $value["for_url"]; ?>" data-previous="aw_<?php echo ($key > 0) ? ($key-1) : (count($portfolio["aw"])-1); ?>" data-next="aw_<?php echo ($key < (count($portfolio["aw"])-1)) ? ($key+1) : "0";  ?>">
						    		<p><?php echo $value["title"]; ?></p>
						    	</div>                                               
		                    </li>
		                <?php endforeach; ?>
                    </ul>
                </div>
			</div>
		</div>
		<a href="<?php echo $routeUploads; ?>jose_molina_resume.pdf" target="_Blank" class="btn btn-outline-danger btn-download mb-4"><i class="fa fa-cloud-download fa-lg"></i> Download Resume</a>
	</div>
</div>
<?php require("includes/portfolio_detail.php"); ?>
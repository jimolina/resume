<div id="contactme" class="page">
	<div class="col-sm-12 col-md-6 content-picture">

	</div>
	<div class="col-sm-12 col-md-6 content">
		<h1 class="title">Contact</h1>
		<h4 class="mt-5">
			Have questions? You can call or email me. Thank you!!
		</h4>
		<ul class="list-group tags no-gutters mt-4 mb-4">
			<li class="list-group-item no-gutters">
				<div class="icon d-flex align-items-center"><i class="fa fa-map-marker fa-2x"></i>Sanford, FL. USA</div>
			</li>
			<li class="list-group-item no-gutters">
				<div class="icon d-flex align-items-center"><i class="fa fa-phone fa-2x"></i>+1 407 965-70-30</div>
			</li>
			<li class="list-group-item no-gutters">
				<div class="icon d-flex align-items-center"><i class="fa fa-envelope fa-2x"></i><a href="mailto:israel.molina@gmail.com">Email Me</a></div>
			</li>
		</ul>
		<div id="icons" class="icons mt-4 mx-auto">
            <ul class="list-unstyled list-inline">
            	<?php foreach ($social as $key => $value): ?>
					<li id="<?php echo $key; ?>" class="list-inline-item" style="animation-delay:<?php echo ($key>0) ? ($key*0.2) : $key; ?>s">
						<a href="<?php echo $value["url"]; ?>" target="_blank" class="bg-circle">
							<i class="fa fa-brands <?php echo $value["icon"]; ?> fa-2x fa-inverse"></i>
							<i class="fa fa-brands <?php echo $value["icon"]; ?> fa-2x mt-3"></i>
						</a>
					</li>
				<?php endforeach; ?>
            </ul>
		</div>
		<a href="<?php echo $routeUploads; ?>jose_molina_resume.pdf" target="_Blank" class="btn btn-outline-danger btn-download mb-4"><i class="fa fa-cloud-download fa-lg"></i> Download Resume</a>
	</div>
</div>
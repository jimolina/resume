<div id="resume" class="page">
	<div class="col-sm-12 col-md-6 content-picture">

	</div>
	<div class="col-sm-12 col-md-6 content">
		<h1 class="title">Resume</h1>
		<h4 class="mt-5">
			See some of my experience and education through these years.
		</h4>
		<h5 class="sub_titles icon-experience mt-5">Professional Experience</h5>
		<?php foreach( $experience as $value ): ?>
			<div class="card mt-5 mb-1">
				<div class="card-block date">
					<?php echo $value["date"]; ?>
				</div>
			</div>
			<div class="card detail connect">
				<div class="card-block">
					<h4 class="card-title"><?php echo $value["company"]; ?></h4>
					<?php foreach( $value["positions"] as $key => $position ): ?>
						<h6 class="card-subtitle mb-2 <?php echo ( 0 < $key ) ? "mt-4" : ""; ?>">
							<?php echo $position["position"]; ?>
							<?php if( $position["date"] && ! empty( $position["date"] ) ): ?>
								(<?php echo $position["date"]; ?>)
							<?php endif; ?>
						</h6>
						<p class="card-text">
							<?php echo $position["description"]; ?>							
						</p>
					<?php endforeach; ?>
					<small><i class="fa fa-map-marker"></i> <?php echo $value["location"]; ?></small>
				</div>
			</div>
		<?php endforeach; ?>
		<h5 class="sub_titles icon-education mt-5">Education</h5>
		<ul class="list-group tags bg-education mt-4 mb-4">
			<?php foreach( $education as $key => $value ): ?>
				<li class="list-group-item align-items-stretch no-gutters">
					<div class="col-12 col-sm-6 icon"><?php echo $value["title"]; ?></div>
					<div class="col-12 col-sm-6 text-sm-right">
						<?php if( $value["url"] && ! empty( $value["url"] ) ): ?>
							<a href="<?php echo $value["url"]; ?>" class="position-relative z-1" target="_Blank">
								<?php echo $value["from"]; ?>
							</a>
						<?php else: ?>
							<?php echo $value["from"]; ?>
						<?php endif; ?>
					</div>
					<div class="col-12 col-sm-6 icon">
						<small><?php echo $value["date"]; ?></small>
					</div>
					<div class="col-12 col-sm-6 text-sm-right">
						<small><i class="fa fa-map-marker"></i> <?php echo $value["location"]; ?></small>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>		
		<a href="<?php echo $routeUploads; ?>jose_molina_resume.pdf" target="_Blank" class="btn btn-outline-danger btn-download mb-4"><i class="fa fa-cloud-download fa-lg"></i> Download Resume</a>
	</div>
</div>
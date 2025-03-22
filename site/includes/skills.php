<div id="skills" class="page">
	<div class="col-sm-12 col-md-6 content-picture">

	</div>
	<div class="col-sm-12 col-md-6 content">
		<h1 class="title">My Skills</h1>
		<h4 class="mt-5">
			Some of the skills that conform part of my key to be a great multi-disciplinary Web Developer.
		</h4>
		<h5 class="sub_titles icon-skills-pro mt-5">Coding Skills</h5>
		<div class="progress-skills mt-3">
			<?php foreach ($skills["coding"] as $key => $skill): ?>
				<div class="progress-skills-info">
					<div class="image-container">
						<img src="<?php echo $routeUploads; ?>logos/<?php echo $skill["logo"]; ?>" class="<?php echo isset( $skill["logo_style"] ) ? $skill["logo_style"] : "default" ?>" alt="<?php echo $skill["title"]; ?>" title="<?php echo $skill["title"]; ?>">
					</div>
					<span class="label"><?php echo $skill["title"]; ?></span>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $skill["level"]; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill["level"]; ?>%"></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<h5 class="sub_titles icon-skills-version mt-5">Version Control & Code Management</h5>
		<div class="progress-skills mt-3">
			<?php foreach ($skills["control"] as $key => $skill): ?>
				<div class="progress-skills-info">
					<div class="image-container">
						<img src="<?php echo $routeUploads; ?>logos/<?php echo $skill["logo"]; ?>" class="<?php echo isset( $skill["logo_style"] ) ? $skill["logo_style"] : "default" ?>" alt="<?php echo $skill["title"]; ?>" title="<?php echo $skill["title"]; ?>">
					</div>
					<span class="label"><?php echo $skill["title"]; ?></span>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $skill["level"]; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill["level"]; ?>%"></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<h5 class="sub_titles icon-skills-workflow mt-5">Workflow & Documentation Tools</h5>
		<div class="progress-skills mt-3">
			<?php foreach ($skills["workflow"] as $key => $skill): ?>
				<div class="progress-skills-info">
					<div class="image-container">
						<img src="<?php echo $routeUploads; ?>logos/<?php echo $skill["logo"]; ?>" class="<?php echo isset( $skill["logo_style"] ) ? $skill["logo_style"] : "default" ?>" alt="<?php echo $skill["title"]; ?>" title="<?php echo $skill["title"]; ?>">
					</div>
					<span class="label"><?php echo $skill["title"]; ?></span>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $skill["level"]; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill["level"]; ?>%"></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<h5 class="sub_titles icon-skills-gra mt-5">Design Skills</h5>
		<div class="progress-skills mt-3">
			<?php foreach ($skills["design"] as $key => $skill): ?>
				<div class="progress-skills-info">
					<div class="image-container">
						<img src="<?php echo $routeUploads; ?>logos/<?php echo $skill["logo"]; ?>" class="<?php echo isset( $skill["logo_style"] ) ? $skill["logo_style"] : "default" ?>" alt="<?php echo $skill["title"]; ?>" title="<?php echo $skill["title"]; ?>">
					</div>
					<span class="label"><?php echo $skill["title"]; ?></span>
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $skill["level"]; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill["level"]; ?>%"></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<h5 class="sub_titles icon-skills-vendor mt-5">Third-Party/Vendor Integration</h5>
		<div class="progress-skills progress-skills--vendor mt-3 mb-5">
			<p class="progress-skills-info mb-0">
				<span class="name">Video Players:</span>
				<span><?php echo implode( ', ', array_column( $skills["vendors"]["players"], 'title' ) ); ?></span>
			</p>
			<p class="progress-skills-info mt-3 mt-md-0 mb-0">
				<span class="name">Analytics:</span>
				<span><?php echo implode( ', ', array_column( $skills["vendors"]["analytics"], 'title' ) ); ?></span>
			</p>
			<p class="progress-skills-info mt-3 mt-md-0 mb-0">
				<span class="name">Ads:</span>
				<span><?php echo implode( ', ', array_column( $skills["vendors"]["ads"], 'title' ) ); ?></span>
			</p>
			<p class="progress-skills-info mt-3 mt-md-0 mb-0">
				<span class="name">Sports Data:</span>
				<span><?php echo implode( ', ', array_column( $skills["vendors"]["sport_data"], 'title' ) ); ?></span>
			</p>
			<p class="progress-skills-info mt-3 mt-md-0 mb-0">
				<span class="name">
					CDP <i class="fa fa-question-circle-o" aria-hidden="true" title="Custom Data Platform" data-toggle="tooltip" data-placement="top"></i>:
				</span>
				<span><?php echo implode( ', ', array_column( $skills["vendors"]["cdp"], 'title' ) ); ?></span>
			</p>
			<p class="progress-skills-info mt-3 mt-md-0 mb-0">
				<span class="name">
					CEP <i class="fa fa-question-circle-o" aria-hidden="true" title="Custom Engagement Platform" data-toggle="tooltip" data-placement="top"></i>:
				</span>
				<span><?php echo implode( ', ', array_column( $skills["vendors"]["ced"], 'title' ) ); ?></span>
			</p>
			<p class="progress-skills-info mt-3 mt-md-0 mb-0">
				<span class="name">
					PSP <i class="fa fa-question-circle-o" aria-hidden="true" title="Payment Service Provider" data-toggle="tooltip" data-placement="top"></i>:
				</span>
				<span><?php echo implode( ', ', array_column( $skills["vendors"]["checkout"], 'title' ) ); ?></span>
			</p>
			<p class="progress-skills-info mt-3 mt-md-0 mb-0">
				<span class="name">
					(MVPD) <i class="fa fa-question-circle-o" aria-hidden="true" title="Multichannel Video Programming Distributor" data-toggle="tooltip" data-placement="top"></i>:
				</span>
				<span><?php echo implode( ', ', array_column( $skills["vendors"]["mvpd"], 'title' ) ); ?></span>
			</p>
		</div>
		<a href="<?php echo $routeUploads; ?>jose_molina_resume.pdf" target="_Blank" class="btn btn-outline-danger btn-download mb-4"><i class="fa fa-cloud-download fa-lg"></i> Download Resume</a>
	</div>
</div>
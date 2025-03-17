<div id="resume" class="page">
	<div class="col-sm-12 col-md-6 content-picture">

	</div>
	<div class="col-sm-12 col-md-6 content">
		<h1 class="title">Resume</h1>
		<h4 class="mt-5">
			See some of my experience and education through these years.
		</h4>
		<h5 class="sub_titles icon-experience mt-5">Professional Experience</h5>
		<div class="card mt-5 mb-1">
			<div class="card-block date">
				2020 to Actual
			</div>
		</div>
		<div class="card detail connect">
			<div class="card-block">
				<h4 class="card-title">NESN</h4>
				<h6 class="card-subtitle mb-2">Senior Full Stack Engineer (2022 - actual)</h6>
				<p class="card-text">
				    Maintenance of the Subscription system (ReactJs + Stripe). Custom implementation of the Roku OTT activation flow. Integration of Video Players like STN and Bitmovin. Implementation of Ads services like Taboola, and OpenWeb.
				</p>
				<h6 class="card-subtitle mb-2 mt-4">Senior Web Developer (2020 - 2022)</h6>
				<p class="card-text">
					Developing NESN.com using WP VIP, Vanila JS, ReactJS, PHP, CSS3, SASS, Json. Integration of multiple vendors like: BrightCove, SportRadar, Adobe Analytics, Adobe Primetime, Pubmatic. Project, support, and documentation with GitHub, Jira, and Confluence.
					<small class="mt-4"><i class="fa fa-map-marker"></i> USA</small>
				</p>
			</div>
		</div>
		<div class="card mt-5 mb-1">
			<div class="card-block date">
				2017 to 2020
			</div>
		</div>
		<div class="card detail connect">
			<div class="card-block">
				<h4 class="card-title">SmashFly</h4>
				<h6 class="card-subtitle mb-2">Web Developer</h6>
				<p class="card-text">
					Developed the Career Sites for customers like: CVS, Columbia, Canon, Zillow, Groupon using Razor, DNN, Kendo, JQuery, Json, CSS3, SASS, Jira, Confluence.
					<small class="mt-4"><i class="fa fa-map-marker"></i> USA</small>
				</p>
			</div>
		</div>
		<div class="card mt-5 mb-1">
			<div class="card-block date">
				2015 to 2017
			</div>
		</div>
		<div class="card detail connect">
			<div class="card-block">
				<h4 class="card-title">Harris School Solutions / Crosspoint</h4>
				<h6 class="card-subtitle mb-2">Software Engineer</h6>
				<p class="card-text">
					Developed an online application providing a full system solution for public school systems. Designed application to replace a thirty-year-old COBOL program. Developed using: Php Zend Framework, DB2, Dojo, Jquery, CSS3, Less, Gulp, Jira, Confluence, Crucible.
					<small class="mt-4"><i class="fa fa-map-marker"></i> USA</small>
				</p>
			</div>
		</div>
		<div class="card mt-5 mb-1">
			<div class="card-block date">
				2012 to 2015
			</div>
		</div>
		<div class="card detail connect">
			<div class="card-block">
				<h4 class="card-title">Viami International</h4>
				<h6 class="card-subtitle mb-2">Web Developer</h6>
				<p class="card-text">
					Actively involved in: the design, development and implementation of the corporation’s websites. This included database design in MySQL and PHP developer. Also developed a local system for diary report activity.
					<small class="mt-4"><i class="fa fa-group"></i> Supervisor: Eduardo Alvarez | +1 407 328.4746 | <a href="mailto:edualv@msn.com">edualv@msn.com</a></small>
					<small><i class="fa fa-map-marker"></i> USA</small>
				</p>
			</div>
		</div>
		<div class="card mt-5 mb-1">
			<div class="card-block date">
				2004 to 2012
			</div>
		</div>
		<div class="card detail">
			<div class="card-block">
				<h4 class="card-title">Adverweb</h4>
				<h6 class="card-subtitle mb-2">Senior Support Manager</h6>
				<p class="card-text">
					As a Senior Support Manager, My responsability was to apply and provide: operational and billing support systems, data transformation/reports, and innovative business solutions. I am also involved in the creation of PHP/ASP/HTML/DHTM based websites, applications, relational databases, views, stored procedures and the conversion from older technologies to new technologies.
					<small class="mt-4"><i class="fa fa-group"></i> Supervisor: Filomena Calicchia | +58 414 014.0822 | <a href="mailto:filo@adverweb.com">filo@adverweb.com</a></small>
					<small><i class="fa fa-map-marker"></i> Venezuela</small>
				</p>
			</div>
		</div>
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
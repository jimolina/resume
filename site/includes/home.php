<div id="home" class="page">
	<div id="info" class="info">
		<div class="container">
        	<div id="title" class="title mb-4">
            		I'm <span>Jose</span>
      		</div>
            <div id="title_sup" class="title_sup">
            	<strong>Web developer</strong> <i>by Profession</i>, 
            	<strong>Photographer</strong> <i>by Passion</i>, 
            	<strong>Filmmaker</strong> <i>by Challenge</i>.
            </div>
			<div id="icons" class="icons mt-5 mx-auto">
	            <ul class="list-unstyled list-inline">
	            	<?php foreach ($social as $key => $value): ?>
						<li id="sm-icon-<?php echo $key; ?>" class="list-inline-item" style="animation-delay:<?php echo ($key>0) ? ($key*0.2) : $key; ?>s">
							<a href="<?php echo $value["url"]; ?>" target="_blank" class="bg-circle">
								<i class="fa <?php echo $value["icon"]; ?> fa-2x fa-inverse"></i>
								<i class="fa <?php echo $value["icon"]; ?> fa-2x mt-3"></i>
							</a>
						</li>
					<?php endforeach; ?>
	            </ul>
			</div>
		</div>
	</div>
	<p class="bubble first">
		<a class="btn btn-sm white scrollitem" href="#contactme">
  			<i class="fa fa-envelope-o fa-2x pull-left"></i> <small>I'm available for</small><br>FREELANCE
		</a>
	</p>
	<p class="bubble second">
		<a class="btn btn-sm white" href="<?php echo $routeUploads; ?>jose_molina_resume.pdf" target="_Blank">
  			<i class="fa fa-cloud-download fa-2x pull-left"></i> <small>My Resume</small><br>DOWNLOAD
		</a>
	</p>
</div>
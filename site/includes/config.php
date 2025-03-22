<?php
	$route = "https://josemolinaresume.com/site/";
	$routeUploads = "https://josemolinaresume.com/uploads/";

	if ( strpos( $_SERVER["HTTP_HOST"], "localhost" ) !== false ) {
		$route = "http://localhost:8080/site/";
		$routeUploads = "http://localhost:8080/uploads/";
	}

	$social = array(
		// array(
		// 	"icon" => "fa-facebook",
		// 	"url"  => "https://www.facebook.com/josemolinafotos/"
		// ),
		// array(
		// 	"icon" => "fa-twitter",
		// 	"url"  => "https://twitter.com/josemolinafotos"
		// ),
		array(
			"icon" => "fa-instagram",
			"url"  => "https://www.instagram.com/josemolinafotos/"
		),
		array(
			"icon" => "fa-linkedin",
			"url"  => "https://www.linkedin.com/in/joseisraelmolina/"
		),
		array(
			"icon" => "fa-github",
			"url"  => "https://github.com/jimolina"
		)
		// ,
		// array(
		// 	"icon" => "fa-youtube",
		// 	"url"  => "https://www.youtube.com/jmolinas"
		// )
	);
	$portfolio["freelance"] = array(
		array(
			"img" 			=> "lookhive.png",
			"title"  		=> "LookHive.com",
			"description"  	=> "Create a FREE Modern Resume",
			"date"  		=> "06-2020",
			"url"  			=> "",
			"categories"  	=> "Reactjs, Firebase, Bootstrap 4, FontAwesome, SASS, CSS3, HTML5",
			"for"  			=> "Myself",
			"as"  			=> "freelance",
			"for_url"  		=> "",
		),		
		array(
			"img" 			=> "jobs-board-reactjs-app.png",
			"title"  		=> "Jobs Board: ReactJs + GraphQL Example Code.",
			"description"  	=> "A Reactjs + GraphQL mini code example that display some Jobs data.",
			"date"  		=> "06-2020",
			"url"  			=> "https://jm-jobsboard-reactjs-graphql-app.netlify.app/",
			"categories"  	=> "Reactjs, GraphQL, Bootstrap 4, FontAwesome, SASS, CSS3, HTML5",
			"for"  			=> "Myself",
			"as"  			=> "freelance",
			"for_url"  		=> "",
		),		
		array(
			"img" 			=> "covid19-reactjs-app.png",
			"title"  		=> "COVID-19 Info Data ReactJs.",
			"description"  	=> "A Reactjs mini code example that display all the COVID-19 data by country.",
			"date"  		=> "06-2020",
			"url"  			=> "https://jm-covid19-react-app.netlify.app/",
			"categories"  	=> "Reactjs, Bootstrap 4, FontAwesome, SASS, CSS3, HTML5",
			"for"  			=> "Myself",
			"as"  			=> "freelance",
			"for_url"  		=> "",
		),		
		array(
			"img" 			=> "todo-react-app.png",
			"title"  		=> "TODO List: A ReactJs mini code",
			"description"  	=> "A ReactJs mini code example.",
			"date"  		=> "05-2020",
			"url"  			=> "https://github.com/jimolina/todo-react",
			"categories"  	=> "Reactjs, Bootstrap 4, FontAwesome, SASS, CSS3, HTML5",
			"for"  			=> "Myself",
			"as"  			=> "freelance",
			"for_url"  		=> "",
		),		
		array(
			"img" 			=> "jm-social-media-font-awesome.png",
			"title"  		=> "WP Plugin: Social Media with FontAwesome",
			"description"  	=> "Jm Social Media Font Awesome let you add icons for your social media URI using the popular font awesome.",
			"date"  		=> "06-2017",
			"url"  			=> "https://wordpress.org/plugins/jm-social-media-font-awesome/",
			"categories"  	=> "WordPress, Plugin, Bootstrap 4 Alpha, FontAwesome, SASS, CSS",
			"for"  			=> "Myself",
			"as"  			=> "freelance",
			"for_url"  		=> "",
		),		
		array(
			"img" 			=> "bakeangular.png",
			"title"  		=> "BakeAngular",
			"description"  	=> "Created a simple Back-End with CakePhp 3 & AngularJS & MySql.",
			"date"  		=> "05-2017",
			"url"  			=> "https://github.com/jimolina/bakeangular",
			"categories"  	=> "Php (CakePhp 3), MySql, AngularJs, Bootstrap 4 Alpha, Less, CSS",
			"for"  			=> "Myself",
			"as"  			=> "freelance",
			"for_url"  		=> "",
		),
		array(
			"img" 			=> "aguasreales.jpg",
			"title"  		=> "aguasreales.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "04-2015",
			"url"  			=> "",
			"categories"  	=> "Php, MySql, CSS, Photoshop",
			"for"  			=> "Guep Group",
			"as"  			=> "freelance",
			"for_url"  		=> "http://guepgroup.com",
		),
		array(
			"img" 			=> "dierk.jpg",
			"title"  		=> "dierk.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "10-2014",
			"url"  			=> "",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Guep Group",
			"as"  			=> "freelance",
			"for_url"  		=> "http://guepgroup.com",
		),
		array(
			"img" 			=> "southam-corp.jpg",
			"title"  		=> "southam-corp.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "09-2014",
			"url"  			=> "",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Guep Group",
			"as"  			=> "freelance",
			"for_url"  		=> "http://guepgroup.com",
		),
		array(
			"img" 			=> "doctoryaso.jpg",
			"title"  		=> "doctoryaso.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "06-2014",
			"url"  			=> "http://www.doctoryaso.com",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Guep Group",
			"as"  			=> "freelance",
			"for_url"  		=> "http://guepgroup.com",
		),
		array(
			"img" 			=> "alcaldiaelhatillo.jpg",
			"title"  		=> "alcaldiaelhatillo.gob.ve",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "05-2014",
			"url"  			=> "",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Guep Group",
			"as"  			=> "freelance",
			"for_url"  		=> "http://guepgroup.com",
		),
		array(
			"img" 			=> "serviciosplatinium.jpg",
			"title"  		=> "serviciosplatinium.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "4-2014",
			"url"  			=> "",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Freelance",
			"as"  			=> "",
			"for_url"  		=> "",
		),
		array(
			"img" 			=> "selectedcafe.jpg",
			"title"  		=> "selectedcafe.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "6-2013",
			"url"  			=> "",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Freelance",
			"as"  			=> "",
			"for_url"  		=> "",
		),
		array(
			"img" 			=> "vavni.jpg",
			"title"  		=> "vavni.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "5-2013",
			"url"  			=> "",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Freelance",
			"as"  			=> "",
			"for_url"  		=> "",
		),
		array(
			"img" 			=> "jmolinaphotography.jpg",
			"title"  		=> "jmolinaphotography.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "11-2012",
			"url"  			=> "",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Freelance",
			"as"  			=> "",
			"for_url"  		=> "",
		),
		array(
			"img" 			=> "calcibon.jpg",
			"title"  		=> "calcibon.com",
			"description"  	=> "Development payroll forms, email communications, css.",
			"date"  		=> "10-2012",
			"url"  			=> "",
			"categories"  	=> "Php, CSS",
			"for"  			=> "Mandarinagrafica.com",
			"as"  			=> "Freelance",
			"for_url"  		=> "http://www.mandarinagrafica.com",
		),
		array(
			"img" 			=> "cero-grasa.jpg",
			"title"  		=> "cero-grasa.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "10-2012",
			"url"  			=> "",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Guep Group",
			"as"  			=> "freelance",
			"for_url"  		=> "http://guepgroup.com",
		),
		array(
			"img" 			=> "seven.jpg",
			"title"  		=> "seven.com.ve",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "07-2010",
			"url"  			=> "",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Freelance",
			"as"  			=> "freelance",
			"for_url"  		=> "",
		),
		array(
			"img" 			=> "netpoint.jpg",
			"title"  		=> "netpointve.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "10-2010",
			"url"  			=> "",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Freelance",
			"as"  			=> "freelance",
			"for_url"  		=> "",
		),
		array(
			"img" 			=> "tentandsail.jpg",
			"title"  		=> "tentandsail.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "01-2009",
			"url"  			=> "",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Freelance",
			"as"  			=> "freelance",
			"for_url"  		=> "",
		)
	);

	$portfolio["viami"] = array(
		array(
			"img" 			=> "edsonca.jpg",
			"title"  		=> "edsonca.com",
			"description"  	=> "Implementation, configuration and adjustments of WordPress 					Template.",
			"date"  		=> "05-2014",
			"url"  			=> "",
			"categories"  	=> "WordPress, CSS",
			"for"  			=> "Viami International",
			"as"  			=> "",
			"for_url"  		=> "http://viamiinternational.com",
		),
		array(
			"img" 			=> "viamiinternational.jpg",
			"title"  		=> "viamiinternational.com",
			"description"  	=> "Implementation, configuration and adjustments of WordPress 					Template.",
			"date"  		=> "01-2013",
			"url"  			=> "http://viamiinternational.com",
			"categories"  	=> "WordPress, CSS",
			"for"  			=> "Viami International",
			"as"  			=> "",
			"for_url"  		=> "http://viamiinternational.com",
		)
	);

	$portfolio["aw"] = array(
		array(
			"img" 			=> "100x100banco.jpg",
			"title"  		=> "100x100banco.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "n/a",
			"url"  			=> "http://edsonca.com",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Adverweb.com",
			"as"  			=> "",
			"for_url"  		=> "http://adverweb.com",
		),
		array(
			"img" 			=> "elavila.jpg",
			"title"  		=> "elavila.org",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "n/a",
			"url"  			=> "http://www.elavila.org",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Adverweb.com",
			"as"  			=> "",
			"for_url"  		=> "http://adverweb.com",
		),
		array(
			"img" 			=> "iskia.jpg",
			"title"  		=> "iskia.com",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "n/a",
			"url"  			=> "http://www.iskia.org",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Adverweb.com",
			"as"  			=> "",
			"for_url"  		=> "http://adverweb.com",
		),
		array(
			"img" 			=> "locatel.jpg",
			"title"  		=> "locatel.com.ve",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "n/a",
			"url"  			=> "http://www.locatel.com.ve",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Adverweb.com",
			"as"  			=> "",
			"for_url"  		=> "http://adverweb.com",
		),
		array(
			"img" 			=> "tsv.jpg",
			"title"  		=> "tsv.com.ve",
			"description"  	=> "Implementation of PSD graphic templates. Creating CSS, PHP 					code and MySql Structure.",
			"date"  		=> "n/a",
			"url"  			=> "http://www.tsv.com.ve",
			"categories"  	=> "Php, MySql Structure, CSS, Photoshop",
			"for"  			=> "Adverweb.com",
			"as"  			=> "",
			"for_url"  		=> "http://adverweb.com",
		)
	);

	$portfolio["nesn"] = array(
		array(
			"img" 			=> "nesn.jpg",
			"title"  		=> "NESN",
			"description"  	=> "Developing NESN.com using WP VIP.",
			"date"  		=> "2020 - 2025",
			"url"  			=> "https://nesn.com/",
			"categories"  	=> "WP VIP, PHP, CSS3, SASS, ReactJs, JS, JQuery, Json.",
			"for"  			=> "NESN",
			"as"  			=> "Senior Full Stack Engineer",
			"for_url"  		=> "https://nesn.com/",
		),
		array(
			"img" 			=> "sportsnetpittsburgh.jpg",
			"title"  		=> "Sportsnet Pittsburgh",
			"description"  	=> "Developing Sportsnetpittsburgh.com using WP VIP.",
			"date"  		=> "2024 - 2025",
			"url"  			=> "https://sportsnetpittsburgh.com/",
			"categories"  	=> "WP VIP, PHP, CSS3, SASS, ReactJs, JS, JQuery, Json.",
			"for"  			=> "NESN",
			"as"  			=> "Senior Full Stack Engineer",
			"for_url"  		=> "https://nesn.com/",
		),
		array(
			"img" 			=> "nesn-careers.jpg",
			"title"  		=> "Nesn Careers",
			"description"  	=> "Developing Careers.nesn.com using WP VIP under a Multisite space.",
			"date"  		=> "2020 - 2025",
			"url"  			=> "https://careers.nesn.com/",
			"categories"  	=> "WP VIP, PHP, CSS3, JS, JQuery.",
			"for"  			=> "NESN",
			"as"  			=> "Senior Full Stack Engineer",
			"for_url"  		=> "https://nesn.com/",
		),
		array(
			"img" 			=> "getnesn.jpg",
			"title"  		=> "Get NESN",
			"description"  	=> "Developing Getnesn.com using WP VIP under a Multisite space.",
			"date"  		=> "2020 - 2025",
			"url"  			=> "https://getnesn.com/",
			"categories"  	=> "WP VIP, PHP, CSS3, JS, JQuery.",
			"for"  			=> "NESN",
			"as"  			=> "Senior Full Stack Engineer",
			"for_url"  		=> "https://nesn.com/",
		),
		array(
			"img" 			=> "diningplaybook.jpg",
			"title"  		=> "Dining Playbook",
			"description"  	=> "Developing Diningplaybook.com using WP VIP under a Multisite space.",
			"date"  		=> "2020 - 2025",
			"url"  			=> "https://diningplaybook.com/",
			"categories"  	=> "WP VIP, PHP, CSS3, JS, JQuery.",
			"for"  			=> "NESN",
			"as"  			=> "Senior Full Stack Engineer",
			"for_url"  		=> "https://nesn.com/",
		),
		array(
			"img" 			=> "nesnclubhouse.jpg",
			"title"  		=> "NESN Clubhouse",
			"description"  	=> "Developing Nesnclubhouse.com using WP VIP under a Multisite space.",
			"date"  		=> "2020 - 2025",
			"url"  			=> "https://nesnclubhouse.com/",
			"categories"  	=> "WP VIP, PHP, CSS3, JS, JQuery.",
			"for"  			=> "NESN",
			"as"  			=> "Senior Full Stack Engineer",
			"for_url"  		=> "https://nesn.com/",
		),
	);

	$portfolio["smashflay"] = array(
		array(
			"img" 			=> "canon-canada.jpg",
			"title"  		=> "Canon Canada Careers",
			"description"  	=> "Developing Careers.canon.ca using WordPress.",
			"date"  		=> "2017 - 2020",
			"url"  			=> "https://careers.canon.ca/",
			"categories"  	=> "WordPress, PHP, CSS3, SASS, JS, JQuery, Json, Kendo, Razor, DNN.",
			"for"  			=> "Smashflay",
			"as"  			=> "Web Developer",
			"for_url"  		=> "https://smashflay.com/",
		),
		array(
			"img" 			=> "intel.jpg",
			"title"  		=> "Intel Careers",
			"description"  	=> "Developing Jobs.intel.com using WordPress.",
			"date"  		=> "2017 - 2020",
			"url"  			=> "https://jobs.intel.com/en",
			"categories"  	=> "WordPress, PHP, CSS3, SASS, JS, JQuery, Json, Kendo, Razor, DNN.",
			"for"  			=> "Smashflay",
			"as"  			=> "Web Developer",
			"for_url"  		=> "https://smashflay.com/",
		),
		array(
			"img" 			=> "cvs.jpg",
			"title"  		=> "CVS Careers",
			"description"  	=> "Developing Jobs.cvshealth.com using WordPress.",
			"date"  		=> "2017 - 2020",
			"url"  			=> "https://jobs.cvshealth.com/us/en",
			"categories"  	=> "WordPress, PHP, CSS3, SASS, JS, JQuery, Json, Kendo, Razor, DNN.",
			"for"  			=> "Smashflay",
			"as"  			=> "Web Developer",
			"for_url"  		=> "https://smashflay.com/",
		),
		array(
			"img" 			=> "texas-roadhouse.jpg",
			"title"  		=> "Texas Roadhouse Careers",
			"description"  	=> "Developing Careers.becomearoadie.com using WordPress.",
			"date"  		=> "2017 - 2020",
			"url"  			=> "https://careers.becomearoadie.com/us/en/search-results",
			"categories"  	=> "WordPress, PHP, CSS3, SASS, JS, JQuery, Json, Kendo, Razor, DNN.",
			"for"  			=> "Smashflay",
			"as"  			=> "Web Developer",
			"for_url"  		=> "https://smashflay.com/",
		),
		array(
			"img" 			=> "invesco.jpg",
			"title"  		=> "Invesco Careers",
			"description"  	=> "Developing Careers.invesco.com using WordPress.",
			"date"  		=> "2017 - 2020",
			"url"  			=> "https://careers.invesco.com/",
			"categories"  	=> "WordPress, PHP, CSS3, SASS, JS, JQuery, Json, Kendo, Razor, DNN.",
			"for"  			=> "Smashflay",
			"as"  			=> "Web Developer",
			"for_url"  		=> "https://smashflay.com/",
		),
	);

	$education = array(
		array(
			"title"    => "Accessibility for Web Design",
			"date"     => "2023",
			"url"      => "https://www.linkedin.com/learning/certificates/132293000ae131bb52ed880f1536b535296659cdceb415c5e8023dacf3b4a4d8?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_certifications_details%3BMHcvZc43TDeue59w7teudw%3D%3D",
			"from"     => "Linkedin Learning",
			"location" => "FL, USA",
		),
		array(
			"title"    => "Git Essential Training",
			"date"     => "2023",
			"url"      => "https://www.linkedin.com/learning/certificates/e6727583fbd0d6e0113b631079a8863cc6a6b521997c6da3732088aeca53357b?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_certifications_details%3BMHcvZc43TDeue59w7teudw%3D%3D",
			"from"     => "Linkedin Learning",
			"location" => "FL, USA",
		),
		array(
			"title"    => "Learning Vagrant",
			"date"     => "2020",
			"url"      => "https://www.linkedin.com/learning/certificates/ba2592c32496a46b262e07cf25dab90c4f52be2a3ec50ad327b9de7c2d0b3087?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_certifications_details%3BMHcvZc43TDeue59w7teudw%3D%3D",
			"from"     => "Linkedin Learning",
			"location" => "FL, USA",
		),
		array(
			"title"    => "WordPress: Developing Blocks with Gutenberg",
			"date"     => "2020",
			"url"      => "https://www.linkedin.com/learning/certificates/83b4b7441330baad6821d1070ec43e50e9f5bb23f35dfaeb21ca2eaa03295395?trk=backfilled_certificate&lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_certifications_details%3BMHcvZc43TDeue59w7teudw%3D%3D",
			"from"     => "Linkedin Learning",
			"location" => "FL, USA",
		),
		array(
			"title"    => "Learning Django",
			"date"     => "2020",
			"url"      => "https://www.linkedin.com/learning/certificates/f59bc23d433f8f7e2ef4183d8e00da2d90b7ed0b856db1b03afe0720784723ab",
			"from"     => "Linkedin Learning",
			"location" => "FL, USA",
		),
		array(
			"title"    => "PHP 7 New Features",
			"date"     => "2020",
			"url"      => "https://www.linkedin.com/learning/certificates/8e77bcef8136e4101f150b9c1a41f7ae9285b442bf4d4e2cb14fb902574bcd0c?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_certifications_details%3BMHcvZc43TDeue59w7teudw%3D%3D",
			"from"     => "Linkedin Learning",
			"location" => "FL, USA",
		),
		array(
			"title"    => "Certified Transform Recruitment Marketer",
			"date"     => "2018",
			"url"      => "https://verify.skilljar.com/c/v8ue9xnwtnvr",
			"from"     => "SmashFly Transform Academy",
			"location" => "MS, USA",
		),
		array(
			"title"    => "ESOL",
			"date"     => "2013",
			"url"      => "https://www.seminolestate.edu/adult-ed/els/esol/",
			"from"     => "Seminole State College of Florida",
			"location" => "FL, USA",
		),
		array(
			"title"    => "Digital Photography",
			"date"     => "2012",
			"url"      => "http://www.robertomata.net/",
			"from"     => "Roberto Mata",
			"location" => "Caracas, Venezuela",
		),
		array(
			"title"    => "Digital Photography & Lighting Studio",
			"date"     => "2012",
			"url"      => "",
			"from"     => "Escuela Foto Arte",
			"location" => "Caracas, Venezuela",
		),
		array(
			"title"    => "Ethical Hacking",
			"date"     => "2009",
			"url"      => "",
			"from"     => "Condo Consulting",
			"location" => "Caracas, Venezuela",
		),
		array(
			"title"    => "Php Certified Developer",
			"date"     => "2009",
			"url"      => "",
			"from"     => "Php de Venezuela",
			"location" => "Caracas, Venezuela",
		),
		array(
			"title"    => "Web Designer",
			"date"     => "2003",
			"url"      => "http://www.ucv.ve/",
			"from"     => "UCV",
			"location" => "Maracay, Venezuela",
		),
		array(
			"title"    => "Electrical Engineering",
			"date"     => "1998",
			"url"      => "http://uba.edu.ve/",
			"from"     => "UBA",
			"location" => "Maracay, Venezuela",
		),
	);

	$experience = array(
		array(
			"date"      => "2020 to Actual",
			"company"   => "NESN",
			"location"  => "USA",
			"positions" => array(
				array(
					"position"    => "Senior Full Stack Engineer",
					"date"        => "2022 - actual",
					"description" => "Development and Maintenance of the Subscription system (ReactJs + Stripe + AWS Cognito). Development and Maintenance of the OTT activation flow. Custom implementation of the Roku OTT activation flow. Integrating Video Players vendors like: BrightCove, STN, and Bitmovin. Integrating Ads vendors like: Taboola, and OpenWeb. Integrating Sport Data vendor like: EaseLive. Integrating Customer Experience Platform vendor like: Braze. Use PHPUnit as test tool, keeping the minimum PASS value at 85%. Keep all previous responsibilities as Senior Web Developer.",
				),
				array(
					"position"    => "Senior Web Developer",
					"date"        => "2020 - 2022",
					"description" => "Developing NESN.com using WP VIP, Vanila JS, ReactJS, PHP, CSS3, SASS, Json. Creation of Endpoints to deliver data to Mobile and OTT Apps, allowing for dynamic cards and content to be surfaced in the Apps. Integration of multiple vendors like: Google Analytics, Adobe Analytics, Adobe Primetime, Pubmatic, Sprinserver, Google Ad Manager, and SportRadar. Maintenance of previous vendor integrations like: Blueconic, Stripe, and BrightCove. Help onboarding new contractors and engineers. Creation of the first technical documentation (Confluence) for systems inherited by previous developers and
previous and current external agencies. Attend daily StandUp meetings, 2 weeks Sprints, and planning sprint in base of story points. Use GitHub to manage each Jira ticket as a new feature/fix/hotfix branch. Code Review flow using GitHub and monitoring CircleCI for continuous integration. Created code snipers documentation in Confluence and share with the others developers in the team.",
				)
			),
		),
		array(
			"date"      => "2017 to 2020",
			"company"   => "SmashFly",
			"location"  => "USA",
			"positions" => array(
				array(
					"position"    => "Web Developer",
					"date"        => "",
					"description" => "Developed the Career Sites for customers like: CVS, Columbia, Canon, Zillow, Groupon using Razor, DNN, Kendo, JQuery, Json, CSS3, SASS, Jira, Confluence. Use Json objects to manage all the data in the front-end, like data grids. Extensive use of jQuery and Kendo to provide the user experience required for each customer. Use of Gulp to automate the creation of .css files for Dev / QA / Production (.min version) environments. Normalization of css class using Bootstrap 4. Implemented SASS node component with Visual Studio Code.",
				)
			),
		),
		array(
			"date"      => "2015 to 2017",
			"company"   => "Harris School Solutions / Crosspoint",
			"location"  => "USA",
			"positions" => array(
				array(
					"position"    => "Software Engineer",
					"date"        => "",
					"description" => "Developed an online application providing a full system solution for public school systems. Designed application to replace a thirty-year-old COBOL program. Developed using: Php Zend Framework, DB2, Dojo, Jquery, CSS3, Less, Gulp, Jira, Confluence, Crucible. Executed Ajax calls to the Db2 and Cobol programs to obtain Json Objects. Use of Rest url to manage the data grid and CRUD pages. Extensive use of Dojo and jQuery to provide the same behaviors the previous COBOL program provided. Use of Gulp to automate the creation of .css files for Dev / QA / Production (.min version) environments. Normalization of css class using Bootstrap 3. Use of Balsamic to create mockups. Use git/sourcetree to manage each ticket as a new feature branch. Use git/sourcetree to manage each ticket as a new feature branch",
				)
			),
		),
		array(
			"date"      => "2012 to 2015",
			"company"   => "Viami International",
			"location"  => "Caracas, Venezuela",
			"positions" => array(
				array(
					"position"    => "Web Developer",
					"date"        => "",
					"description" => "Implementation of PSD graphic templates. Creating CSS, PHP code and MySql Structure.",
				)
			),
		),
		array(
			"date"      => "2004 to 2012",
			"company"   => "Adverweb",
			"location"  => "Caracas, Venezuela",
			"positions" => array(
				array(
					"position"    => "Support Manager",
					"date"        => "2008 to 2012",
					"description" => "Managed team of 4 including designers, developers and social media manager; provided 360° reviews and
supervised technical test hiring; reported monthly status to General Manager. Created technical scope in base of brainstorming, white boarding and scrum meetings. Provided technical support for software changes and new requirements to projects in production. Managed customer deliverables by controlling and scheduling times and activities of project phases.",
				),
				array(
					"position"    => "Senior Developer",
					"date"        => "2006 to 2008",
					"description" => "Scheduled activities of project’s phases between team members. Implemented Code Reviews to check each module in all projects. Created an educational website to manage all the student/parents information. Also payroll and daily student
schedule, using Php, MySql, Html, Css2, JavaScript, Ajax. Responsible for the view layout, pagination, and final integration of Php code for a newspaper website. ",
				),
				array(
					"position"    => "Junior Developer",
					"date"        => "2004 to 2006",
					"description" => "Use Php and MySql for create corporative website. Created a Rest CRUD website application for Real Estate company using Php, MySql, Css2, JavaScript. Maintain version control on all development projects through SVN. Implement a security code to prevent sql injections over all the website created in the company.",
				),
			),
		),
	);

	$skills["coding"] = array(
		array(
			"title" => "HTML5",
			"level" => 92,
			"logo"  => "html5-badge-h-solo.png",
			"logo_style" => "small",
		),
		array(
			"title" => "CSS3",
			"level" => 90,
			"logo"  => "CSS3_logo.png",
			"logo_style" => "small",
		),
		array(
			"title" => "SASS",
			"level" => 80,
			"logo"  => "sass.png",
			"logo_style" => "default",
		),
		array(
			"title" => "LESS",
			"level" => 60,
			"logo"  => "less.svg",
			"logo_style" => "default",
		),
		array(
			"title" => "Bootstrap",
			"level" => 80,
			"logo"  => "bootstrap.svg",
			"logo_style" => "default",
		),
		array(
			"title" => "Foundation",
			"level" => 45,
			"logo"  => "Foundation.svg",
			"logo_style" => "default",
		),
		array(
			"title" => "Materialize",
			"level" => 30,
			"logo"  => "materialize-purple-mark.svg",
			"logo_style" => "small",
		),
		array(
			"title" => "PHP",
			"level" => 90,
			"logo"  => "new-php-logo.svg",
			"logo_style" => "default",
		),
		array(
			"title" => "WordPress",
			"level" => 80,
			"logo"  => "wordpress.svg",
			"logo_style" => "small",
		),
		array(
			"title" => "WP VIP",
			"level" => 75,
			"logo"  => "wpvip-logo-only-blk-gold@4x-8.png",
			"logo_style" => "big",
		),
		array(
			"title" => "Razor",
			"level" => 55,
			"logo"  => "razor.png",
			"logo_style" => "big",
		),
		array(
			"title" => "DNN (dotnetnuke)",
			"level" => 50,
			"logo"  => "DNN_fullcolor_pos.png",
		),
		array(
			"title" => "JavaScript",
			"level" => 90,
			"logo"  => "JavaScript-logo.png",
		),
		array(
			"title" => "jQuery",
			"level" => 85,
			"logo"  => "jQuery-Logo.png",
			"logo_style" => "big",
		),
		array(
			"title" => "Dojo",
			"level" => 50,
			"logo"  => "dojo.png",
		),
		array(
			"title" => "Kendo",
			"level" => 50,
			"logo"  => "Characters_kendoka_homepage.png",
		),
		array(
			"title" => "ReactJs",
			"level" => 65,
			"logo"  => "React-icon.svg",
		),
		array(
			"title" => "AngularJs",
			"level" => 30,
			"logo"  => "angular.png",
		),
		array(
			"title" => "Zend",
			"level" => 50,
			"logo"  => "ZendFramework-logo.png",
		),
		array(
			"title" => "Laravel",
			"level" => 50,
			"logo"  => "Laravel.svg",
			"logo_style" => "small",
		),
		array(
			"title" => "CakePhp",
			"level" => 45,
			"logo"  => "Cake-logo.png",
			"logo_style" => "big",
		),
		array(
			"title" => "CodeIgniter",
			"level" => 40,
			"logo"  => "codeigniter-logo.png",
		),
		array(
			"title" => "MySql",
			"level" => 70,
			"logo"  => "logo-mysql-170x115.png",
			"logo_style" => "big",
		),
		array(
			"title" => "MongoDB",
			"level" => 40,
			"logo"  => "MongoDB_Logomark_SpringGreen.png",
			"logo_style" => "extra-small",
		),
		array(
			"title" => "DB2",
			"level" => 35,
			"logo"  => "db2-logo.png",
		),
		array(
			"title" => "MS-Sql",
			"level" => 65,
			"logo"  => "mi437mc37-microsoft-sql-server-logo-microsoft-sql-server-component-prismatic-docs.png",
		),
		array(
			"title" => "PostgreSQL",
			"level" => 40,
			"logo"  => "elephant.png",
		),
		array(
			"title" => "Docker",
			"level" => 30,
			"logo"  => "docker-mark-blue.png",
		),
		array(
			"title" => "Gulp",
			"level" => 40,
			"logo"  => "gulp-2x.png",
		),
		array(
			"title" => "Webpack",
			"level" => 30,
			"logo"  => "webpack-icon.png",
		),
	);

	$skills["control"] = array(
		array(
			"title" => "Git",
			"level" => 60,
			"logo"  => "Git-Icon-1788C.png",
		),
		array(
			"title" => "GitHub",
			"level" => 75,
			"logo"  => "github-mark.png",
		),
		array(
			"title" => "Bitbucket",
			"level" => 60,
			"logo"  => "mark-gradient-blue-bitbucket.png",
		),
		array(
			"title" => "SourceTree",
			"level" => 75,
			"logo"  => "mark-gradient-blue-sourcetree.png",
		),
		array(
			"title" => "Crucible",
			"level" => 60,
			"logo"  => "mark-gradient-blue-crucible.png",
		),
		array(
			"title" => "CircleCI",
			"level" => 30,
			"logo"  => "circleci-black-png.png",
		),
		array(
			"title" => "Buddy (Former Springloops)",
			"level" => 40,
			"logo"  => "buddy.png",
		),
	);

	$skills["workflow"] = array(
		array(
			"title" => "Browserstack",
			"level" => 60,
			"logo"  => "bstack-logo-global.png",
			"logo_style" => "small",
		),
		array(
			"title" => "Jira",
			"level" => 80,
			"logo"  => "mark-gradient-blue-jira.png",
		),
		array(
			"title" => "Confluence",
			"level" => 80,
			"logo"  => "mark-gradient-blue-confluence.png",
		),
		array(
			"title" => "Browsersync",
			"level" => 50,
			"logo"  => "browsersync-logo-red.png",
			"logo_style" => "small",
		),
		array(
			"title" => "Postman",
			"level" => 50,
			"logo"  => "Postman-logo-vrtical-orange-2021.png",
		),
	);

	$skills["design"] = array(
		array(
			"title" => "Photoshop",
			"level" => 40,
			"logo"  => "ps_appicon.svg",
			"logo_style" => "small",
		),
		array(
			"title" => "LightRoom",
			"level" => 80,
			"logo"  => "lr_appicon.svg",
			"logo_style" => "small",
		),
		array(
			"title" => "Figma",
			"level" => 30,
			"logo"  => "Figma-Icon-Full-color.png",
			"logo_style" => "big",
		),
		array(
			"title" => "Balsamiq",
			"level" => 55,
			"logo"  => "balsamiq_logomark.png",
		),
	);

	$skills["vendors"]["players"] = array(
		array(
			"title" => "Brightcove",
			"logo"  => "BCOV.png",
			"logo_style" => "small",
		),
		array(
			"title" => "STN",
			"logo"  => "stn-video-favicon.png",
			"logo_style" => "big",
		),
		array(
			"title" => "Bitmovin",
			"logo"  => "bitmovi-icon.svg",
		),
	);

	$skills["vendors"]["analytics"] = array(
		array(
			"title" => "Google Analytics",
		),
		array(
			"title" => "Adobe Analytics",
		),
		array(
			"title" => "Adobe Heartbeats",
		),
	);

	$skills["vendors"]["ads"] = array(
		array(
			"title" => "Google Ad Manager",
		),
		array(
			"title" => "Pubmatic",
		),
		array(
			"title" => "Sprinserver",
		),
		array(
			"title" => "Taboola",
		),
		array(
			"title" => "OpenWeb",
		),
	);

	$skills["vendors"]["sport_data"] = array(
		array(
			"title" => "SportRadar",
		),
		array(
			"title" => "EaseLive",
		),
	);

	$skills["vendors"]["cdp"] = array(
		array(
			"title" => "Blueconic",
		),
	);

	$skills["vendors"]["ced"] = array(
		array(
			"title" => "Braze",
		),
	);

	$skills["vendors"]["checkout"] = array(
		array(
			"title" => "Stripe",
		),
	);

	$skills["vendors"]["mvpd"] = array(
		array(
			"title" => "Adobe Primetime",
		),
	);
?>
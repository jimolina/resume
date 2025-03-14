<?php
	$route = "https://josemolinaresume.com/site/";
	$routeUploads = "https://josemolinaresume.com/uploads/";

	if ( strpos( $_SERVER['HTTP_HOST'], 'localhost' ) !== false ) {
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
?>
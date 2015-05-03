<!DOCTYPE html>
<html>
	<head>
		<title>Symphonies start here</title>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="js/jquery.fullPage.js"></script>
		<script src="js/app.js"></script>

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/jquery.fullPage.css" rel="stylesheet">
		<link href="css/app.css" rel="stylesheet">
	</head>
	<body>
		<div id="logo-block">
			<img id="logo" src="css/img/logo.png" />
			<div id="logo-text">
				<span class="logo-text-top">GKnight</span>
				<span class="logo-text-bottom">Studios</span>
			</div>
		</div>
		<ul id="menu">
			<li data-menuanchor="symphony">
				<a href="#symphony">Symphony</a>
			</li>
			<li data-menuanchor="about">
				<a href="#about">Prelude</a>
			</li>
			<li data-menuanchor="in-class">
				<a href="#in-class">Warm-ups</a>
			</li>
			<li data-menuanchor="homework">
				<a href="#homework">Exercises</a>
			</li>
			<li data-menuanchor="development">
				<a href="#development">Ensemble</a>
			</li>
		</ul>
		<div id="fullpage">
			<div class="section" id="section0">
			</div>
			<div class="section" id="section1">
				<div class="page">
					<h1 id="introdution-header"> An Introduction </h1>
					<div class="inline-block">
						<h2 id="about-me-header"> About Me </h2>
						<div class="introduction-body">
							<p>As a young man, raised in a home where intelligence was nurtured and worth was placed on the degree
							to which you magnified your abilities, I learned that I have an amazing future.  I have never forgotten
							my mother's love for reading, and even though I didn't share that love until I hit the 4<super>th</super>
							grade, when it hit, it became a ravenous appetite.  I spent many long nights reading fantasy novels until
							the wee hours in the morning.  Now I look forward to sharing that love with my family.</p>

							<p>From my father I learned that work is where character is developed, and while tedious or ungratifying, it
							is one of the most satisfying efforts in life.  I also learned that problems are never unaccomplishable tasks.
							You would never believe the amount of travel bags and tools that fit in a van with 5 children for 16+ hours.</p>

							<p>Now I spend all of my time focusing on taking care of my growing family.  Here we have a good simple life,
							one where the time is always short, the stress high, and the mess great.  It is a constant battle, but one
							worth fighting.  After working as a Web developer and attending school, there is no greater joy than hearing my
							daughters screams of excitement as I walk through the door.  Meeting the smile of my wife who waited all day just
							to see my face and hold me close is the best part of my day.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section" id="section2">
				<div class="page">
					<div class="inline-block slide">
						<h1 id="in-class-intro-header"> In Class Activities </h1>
						<div class="in-class-intro-body">
							<p>Flip through the slides and take a look at what we have been doing in class.  The activities may seem simple, but they
							have their own complexity.  Each serves as a learning experience in using PHP to accomplish frequent tasks needed for 
							web applications.</p>

							<p>At some future point, there may also be snippets from java web servlets and the like.  Stay posted to see what happens
							in the next section of the class.</p>
						</div>
					</div>
					<div class="inline-block slide">
						<h1 id="front-end-header">Simple Front end development</h1>
						<iframe class="in-class-iframe" src="cs213-exercise.php"></iframe>
					</div>
					<div class="inline-block slide">
					<h1 id="front-end-header">Cookie and Session Storage</h1>
						<iframe class="in-class-iframe" src="cookie-exercise.php"></iframe>
					</div>
				</div>
			</div>
			<div class="section" id="section2">
				<div class="page">
					<div class="inline-block">
						<h1 id="in-class-intro-header"> Homework </h1>
						<div class="in-class-intro-body">
							<p>In addition to the in-class work that we have been doing, at times we need to complete tasks on our own.  These assignments
							come to rest here.  At the times there are none, but there will be.  Come back in a few days and you'll see a few new things
							here.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section" id="section3">
				<div class="page table">
					<h1 id="ensemble-header"> A Glimpse into my Skillset </h1>
					<div class="panel inline-block two-column">
						<div class="left">
							<img class="thumbnail" src="//www.weblaa.com/sites/public-files/weblaa.com/styles/blog_default/public/blog/drupal-logo.jpg" />
						</div>
						<div class="description">
							<h2 class="title">Drupal</h2>
							<div class="content">
								<p>Drupal is an opensource content management system written in PHP.  This framework is in use in as varied places as government
								to the League of Legends website.  It has basic core functionality the comes along for the ride, and is extendable through a large
								set of modules and a hooking framework that facilitates many additional actions.</p>
							</div>
						</div>
					</div>
					<div class="panel inline-block two-column">
						<div class="left">
							<img class="thumbnail" src="//book.cakephp.org/2.0/en/_static/cake-logo.png" />
						</div>
						<div class="description">
							<h2 class="title">CakePHP</h2>
							<div class="content">
								<p>Where Drupal comes with quite a few basic functions, CakePHP is really no more that a MVC framework.  It comes with a command
								line generation script that can produce necessary files based on a prebuilt database table.  Everything beyond the basic data entry
								and validation of certain rules must be built.  There are a few plugins that extend this framework with a few additional features,
								but many less than the Drupal counterpart.</p>
							</div>
						</div>
					</div>
					<div class="panel inline-block two-column">
						<div class="left">
							<img class="thumbnail" src="//www.fluentd.org/assets/img/datasources/rails.png" />
						</div>
						<div class="description">
							<h2 class="title">Ruby on Rails</h2>
							<div class="content">
								<p>Ruby on Rails is the concept from which CakePHP was born.  The Rails framework is designed to produce the database through
								generation scripts at the same time the code is generated.  This framework is flexible in that it can be exteneded with additional
								generation scripts.  With a plethra of plugins (gems) the framework is quite versatile, if poorly documented and terse enough to
								make it unweildy.  Still, it is a powerful tool when the job is right.</p>
							</div>
						</div>
					</div>
					<div class="panel inline-block two-column">
						<div class="left">
							<img class="thumbnail" src="//www.unixstickers.com/image/cache/data/stickers/C/C++-unofficial.sh-600x600.png" />
						</div>
						<div class="description">
							<h2 class="title">Languages and Tools</h2>
							<div class="content">
								<p>In addition to the frameworks above, I am familiar with various languages for various purposes: C++, Java, JavaScript, Lisp,
								Prolog, MySQL, and PostgreSQL.  In those languages I have used many libraries: jQuery, OpenGL, BigInteger and the NTL library to
								name a few.  The emphasis of my studies has been on algorithms and deeper concepts of how tasks are accomplished in the best way
								possible.  That aspect has led me to learn to code in any environment, from vi, emacs, or gedit to PHPStorm, Eclispe, or Visual
								Studio.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
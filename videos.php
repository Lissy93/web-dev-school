<?php
    /* Get array of Section objects and find current section */
    include $_SERVER['DOCUMENT_ROOT']."/php/Section.class.php";
    include $_SERVER['DOCUMENT_ROOT']."/php/ReadSections.class.php";
    $rs = new ReadSections();
    $sections = $rs->makeSectionArr();
?>

<!DOCTYPE html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/youmax_grey.min.css">
	<link href="css/styles.css" rel="stylesheet"/>
    <meta charset="UTF-8">
	<meta name="description" content="Free web coding video tutorials for beginers, everything from HTML to Node.js unit testing">
	<meta name="keywords" content="learn, videos, tutorials, youtube, web, coding, programming, java, html5, html, css, jquery, web, node" >
	<title>Video Tutorials | web-dev-school</title>

    <!--[if gte IE 9]>
        <style type="text/css">  .gradient {filter: none;} </style>
    <![endif]-->
</head>
<body class="content-page">
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5513d22b43988ac0" async="async"></script>
	
	<br>
	
    <div class="main-content content">
		   <!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">
                <img src="/img/lgo.png" class="logo-small"  alt="The logo for Web Dev School - A WiFi transmission symbol"/>
                <h1>Web Dev School</h1>
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
			<li><a href="http://web-dev.as93.net/">Home</a></li>
			<li><a href="/about.php">About</a></li>
			<li><a href="/articles.php">Articles</a></li>
			<li><a href="/videos.php" class="active">Videos</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tutorials <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<?php for ($i=0; $i<count($sections); $i++){ ?>
					<li>
						<a href="/<?php echo $rs->processTitle($sections[$i]->getTitle()); ?>">
							<?php echo $sections[$i]->getTitle(); ?>
						</a>
					</li>
				<?php } ?>
				<li class="divider"></li>
				<li><a href="http://web-dev.as93.net">More Topics...</a></li>
			</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Presentations <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="http://web-dev.as93.net/tutorials/html-presentation/#/">HTML5 Introduction</a></li>
					<li><a href="http://web-dev.as93.net/tutorials/css-presentation/#/">CSS3</a></li>
					<li><a href="http://web-dev.as93.net/tutorials/less-presentation/#/">LESS CSS</a></li>
					<li class="divider"></li>
					<li><a href="http://web-dev.as93.net/tutorials/index.html">More Presentations...</a></li>
				</ul>
			</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More Resources <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="http://a2computing.as93.net/">A Level Computing Help</a></li>
						<li><a href="http://computerscience.as93.net/">Further Computer Science Theory</a></li>
						<li><a href="http://revisionquizzes.co.uk/">Computing and IT Quiz Web App</a></li>
						<li><a href="http://code.as93.net/">Example Source Code's</a></li>
						<li class="divider"></li>
						<li><a href="http://web-dev.as93.net/computer-science-resources.php">View More...</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Computer Science Theory <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="http://computerscience.as93.net/index.php/introduction-to-computer-science">Fundamentals</a></li>
						<li><a href="http://computerscience.as93.net/index.php/foundations-of-computing-security">Secure Coding</a></li>
						<li><a href="http://computerscience.as93.net/index.php/data-structures">Data Structures</a></li>
						<li class="divider"></li>
						<li><a href="http://computerscience.as93.net/">View More...</a></li>
					</ul>
				</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
		

		<div class="row" style="margin: 0;">
			<h2 style="margin: 0.2em 2em; font-size: 2em;">Video Tutorials</h2><br>
			<div id="youmax"></div>
		</div>
		
		

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2>Search</h2>
				<div class="nice-box">
						
					<br><br>
						<div style="width:0px;overflow:hidden;height:0px;"> 
							<gcse:search></gcse:search>
						</div>
						<form id="searchbox_017833917711764041130:31zyw7lccd8" action="">
							<input value="017833917711764041130:31zyw7lccd8" name="cx" type="hidden"/>
							<input value="FORID:11" name="cof" type="hidden"/>
							<input type="text" class="form-control" placeholder="Search for..."  id="q"  name="q" autocomplete="off">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
							</span>
						</form>

					<br><br>
				
				</div>
			</div>
		</div>
	
	
	

		<!-- Another Add (sorry again) -->
		<div class="row">
			<div class="col-md-1 col-md-offset-1">
				<h3>Addvert</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 ">
				<div class="nice-box text-center">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- AS93 Computing [banner] -->
						<ins class="adsbygoogle"
							 style="display:inline-block;width:728px;height:90px"
							 data-ad-client="ca-pub-0513771474172316"
							 data-ad-slot="4042942750"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>	
				</div>
			</div>
		</div>
		<br><br><br>

    </div>

	<!-- Footer -->
    <footer>
        <div class="footer-wrapper">
            <p>&#169; <a href="http://aliciasykes.com">Alicia Sykes</a> 2015</p>
        </div>
    </footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>	
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/jquery.youmax.min.js"></script>
	<script src="js/youtubeChanel.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-32531183-7', 'auto');
	  ga('send', 'pageview');

	</script>
	
	<script>
	 (function() {
		var cx = '017833917711764041130:31zyw7lccd8';
		var gcse = document.createElement('script');
		gcse.type = 'text/javascript';
		gcse.async = true;
		gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
			'//cse.google.com/cse.js?cx=' + cx;
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(gcse, s);
	  })();
</script>
</body>
</html>

<?php
/* Get array of Section objects */
include $_SERVER['DOCUMENT_ROOT']."/php/Section.class.php";
include $_SERVER['DOCUMENT_ROOT']."/php/ReadSections.class.php";
$rs = new ReadSections();
$sections = $rs->makeSectionArr();
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/styles.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
	<link rel="canonical" href="http://web-dev.as93.net" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <meta charset="UTF-8">
	<meta name="description" 
		  content="Web Dev School is a collestion of free interactive learning 
				   resources and tutorials for getting started with web development">
	<meta name="keywords" 
		  content="HTML, HTML5, XHTML, CSS, CSS3, JavaScript, JS, jQuery, AJAX, 
				   Angular, websites, web sites, web coding, learning, tutorials,
				   videos, interactive content, quizzes, tests, teaching resources,
				   amazingness">
    <meta name="author" content="Alicia Sykes">
	<title>Web Dev School | Free web coding resources</title>
</head>
<body class="home-page">
	<a href="https://plus.google.com/115412407591975827378" rel="publisher" class="abs">Google+</a>
    <header>
        <div class="nav-bar">
            <img src="/img/lgo.png" class="logo-small" alt="The logo for Web Dev School - A WiFi transmission symbol"/>
            <h1>Web Dev School</h1>
            <div class="pull-right search-container">
                <input type="text" name="search" class="txtSearch" placeholder="Search..." autocomplete="off" id="txtSearch"/>
                <button type="button" value="Go" class="cmdSearch" >
                    <img src="/img/search.png" alt="Search" class="imgSearch"/>
                </button>
				
            </div>
        </div>
    </header>

	
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5513d22b43988ac0" async="async"></script>

    <div class="main-content home">
        <article>
            <div class="welcome-message">
                <h2>Welcome</h2>
                <p>Here you will find some useful content to help you get started with web development</p>
                <p>Click a tile below to get started</p>
            </div>
            <div class="add-page-cont">
                <a href="add.php">
                    <div class="add-page-link">
                        <p>Add New Section</p>
                        <br />
                    </div>
                </a>
				 <a href="computer-science-resources.php">
					<div class="add-page-link">
							<p>Computing Resources</p>
					</div>
				</a>
            </div>
        </article>
        <div class="content-inner">
            <nav>
                <div class="tile-wrap">
                    <?php for($i=0; $i<count($sections); $i++){
                                $section = $sections[$i];  ?>
                    <div class="sec-tile" title="<?php echo  $section->getLongDescription(); ?>">
                        <a href="/<?php echo $rs->processTitle($section->getTitle()); ?>">
                           <h3><?php echo $section->getTitle(); ?></h3>
                            <p><?php echo $section->getDescription(); ?></p>
                        </a>
						<span class="hide">
							<?php echo $section->getLongDescription(); ?>
						</span>
                    </div>
                    <?php } ?>
                </div>
            </nav>
        </div>
    </div>

    <footer>
        <div class="footer-wrapper">
            <p>&#169; <a href="http://aliciasykes.com">Alicia Sykes</a> 2015</p>
            <p class="seperator">|</p>
            <p>
				<a href="https://github.com/Lissy93/web-dev-school"  target="_blank">
					Click here to view the source on GitHub
				</a>
			</p>
        </div>
    </footer>
    <script src="js/page.js"></script>
    <a id="scrollUp" href="#top" title="Scroll to top" class="scroll-obj">Scroll to top</a>
</body>
</html>
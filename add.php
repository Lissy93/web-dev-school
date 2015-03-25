<?php
/* Get array of Section objects and find current section */
include $_SERVER['DOCUMENT_ROOT']."/php/Section.class.php";
include $_SERVER['DOCUMENT_ROOT']."/php/ReadSections.class.php";
include $_SERVER['DOCUMENT_ROOT']."/php/Add.class.php";
$rs = new ReadSections();
$sections = $rs->makeSectionArr();
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/styles.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/addSectionPage.js"></script>
    <meta charset="UTF-8">
    <title>web-dev</title>
    <!--[if gte IE 9]>
    <style type="text/css">  .gradient {filter: none;} </style>
    <![endif]-->
</head>
<body class="add-page">
	
	    <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-53932003-1', 'auto');
			ga('send', 'pageview');
		</script>
	
<header>
    <div class="nav-bar">
        <a href="/index.php">
            <img src="/img/lgo.png" class="logo-small"  alt="The logo for Web Dev School - A WiFi transmission symbol"/>
            <h1>Web Dev School</h1>
        </a>
        <div class="pull-right search-container">
            <input type="text" name="search" class="txtSearch" placeholder="Search..." autocomplete="off" id="txtSearch"/>
            <button type="button" value="Go" class="cmdSearch" >
                <img src="/img/search.png" alt="Search" class="imgSearch"/>
            </button>
        </div>
    </div>
</header>

<div class="main-content content">
    <div class="side-nav">
        <nav>
            <h4>Existing Sections</h4>
            <ul>
                <?php for ($i=0; $i<count($sections); $i++){ ?>
                    <li>
                        <a href="content.php?id=<?php echo $sections[$i]->getId(); ?>">
                            <?php echo $sections[$i]->getTitle(); ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <a href="/" class="returnHome">Click here to rerturn to homepage</a>
        </nav>
    </div>

    <div class="article-content">
        <?php
        if (isset($_POST['txtTitle'])){

            $ao = new AddSection();
            $ao->appendSection($_POST["txtTitle"],$_POST["txtDescription"], 13,$_POST["txtAuthor"],$_POST["txtYoutube"],
                 $_POST["txtPrezi"],$_POST["txtGoogleDoc"],$_POST["txtArticle"],$_POST["txtLink"]);
            echo "<h2>Section Submitted for Admin Review</h2>";
            echo "<p><a href='index.php'>Click here to return to the homepage</a></a></p>";
        }
        else { ?>
        <h2>Add Section</h2>
        <div class="form-wrap">
            <p>To add a section to the website, fill out the form below and press the submit button</p>
            <form action="add.php" method="post">
                <div class="inputSection">
                    <div class="col1"><p class="label"><label>Title</label></p></div>
                    <div class="col2"><input type="text" name="txtTitle" required="required" /></div>
                    <div class="col3"><p class="fieldDescription">Required. The name of the section</p></div>
                </div>
                <div class="inputSection">
                    <div class="col1"><p class="label"><label>Description</label></p></div>
                    <div class="col2"><input type="text" name="txtDescription" required="required" /></div>
                    <div class="col3"><p class="fieldDescription">Required. The brief sentence describing the section</p></div>
                </div>
                <div class="inputSection">
                    <div class="col1"><p class="label"><label>Autohor</label></p></div>
                    <div class="col2"><input type="text" name="txtAuthor"/></div>
                    <div class="col3"><p class="fieldDescription">Optional. The author of the material</p></div>
                </div>
                <div class="inputSection">
                    <div class="col1"><p class="label"><label>YouTube Video</label></p></div>
                    <div class="col2"><input type="text" name="txtYoutube"/></div>
                    <div class="col3"><p class="fieldDescription">Optional. The Embed URL for a Youtube video</p></div>
                </div>
                <div class="inputSection">
                    <div class="col1"><p class="label"><label>Prezi Presentation</label></p></div>
                    <div class="col2"><input type="text" name="txtPrezi"/></div>
                    <div class="col3"><p class="fieldDescription">Optional. The URL of a Prezi to be embeded</p></div>
                </div>
                <div class="inputSection">
                    <div class="col1"><p class="label"><label>Google Doc</label></p></div>
                    <div class="col2"><input type="text" name="txtGoogleDoc"/></div>
                    <div class="col3"><p class="fieldDescription">Optional. The URL of a GoogleDoc to be embeded. NOTE: must be public.</p></div>
                </div>
                <div class="inputSection">
                    <div class="col1"><p class="label"><label>Text Article</label></p></div>
                    <div class="col2"><input type="text" name="txtArticle"/></div>
                    <div class="col3"><p class="fieldDescription">Optional. Text that explains or backs up concepts covered in this section</p></div>
                </div>
                <div class="inputSection">
                    <div class="col1"><p class="label"><label>Links</label></p></div>
                    <div class="col2"><input type="text" name="txtLink[]"/></div>
                    <div class="col3"><p class="fieldDescription">Optional. A list of links providing additional reading or reference</p></div>
                </div>
                <button type="submit" class="saveSection" id="cmdSave">Save Section</button>
            </form>
        </div>
        <?php } ?>


    </div>

</div>

<footer>
    <div class="footer-wrapper">
        <p>&#169; <a href="http://aliciasykes.com">Alicia Sykes</a> 2013</p>
        <p class="seperator">|</p>
        <p id="opener">Click <a>here</a> to view disclaimer</p>
    </div>
</footer>
<div id="dialog" title="Disclaimer" class="disclaimer-dialog">
    <p>Disclaimer: This site has been constructed as coursework for module U08054 Web Technology, at Oxford Brookes
        University.  It is not a working website and is not connected with any site or individual referenced.
        The views and opinions expressed within these pages are personal and should not be construed as reflecting
        the views and opinions of Oxford Brookes University.
    </p>
</div>
<script src="js/page.js"></script>
</body>
</html>
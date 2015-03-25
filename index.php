
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
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <meta charset="UTF-8">
    <title>web-dev</title>
</head>
<body class="home-page">
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
            </div>
        </article>
        <div class="content-inner">
            <nav>
                <div class="tile-wrap">
                    <?php for($i=0; $i<count($sections); $i++){
                                $section = $sections[$i];  ?>
                    <div class="sec-tile">
                        <a href="content.php?id=<?php echo $section->getId(); ?>">
                           <h3><?php echo $section->getTitle(); ?></h3>
                            <p><?php echo $section->getDescription(); ?></p>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </nav>
        </div>
    </div>

    <footer>
        <div class="footer-wrapper">
            <p>&#169; <a href="http://aliciasykes.com">Alicia Sykes</a> 2013</p>
            <p class="seperator">|</p>
            <p id="opener">Click here to view disclaimer</p>
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
    <a id="scrollUp" href="#top" title="Scroll to top" style="position: fixed; z-index: 2147483647; display: none;">Scroll to top</a>
</body>
</html>
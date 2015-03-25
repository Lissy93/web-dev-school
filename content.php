<?php
    /* Get array of Section objects and find current section */
    include $_SERVER['DOCUMENT_ROOT']."/php/Section.class.php";
    include $_SERVER['DOCUMENT_ROOT']."/php/ReadSections.class.php";
    $rs = new ReadSections();
    $sections = $rs->makeSectionArr();
    if(isset($_GET['id'])){
        $secId = $_GET['id'];
        $currentSection = $rs->findSection($secId);
    }
    else{
        $secId = null;
        $currentSection = false;
    }
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
    <!--[if gte IE 9]>
        <style type="text/css">  .gradient {filter: none;} </style>
    <![endif]-->
</head>
<body class="content-page">
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
                <h4>Sections</h4>
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
            <?php if(!$currentSection){?>
                <h2>Section Not Found</h2>
                <?php
                    if($secId==null){ echo "<p>No Section ID was specified</p>"; }
                    else{echo "<p>The Section ID (".$secId.") does not seem to be valid</p>"; }?>
                <p>You can select a section in the menu on the left. Or click <a href="index.php">here</a> to go home</p>
            <?php } else { ?>
            <article>
                <h2><?php echo $currentSection->getTitle(); ?></h2>
                <h3><?php echo $currentSection->getDescription(); ?></h3>
                <?php if($currentSection->getYoutube()!=""){?>
                    <iframe width="640" height="480" src="$currentSection->getYoutube()" frameborder="0" allowfullscreen></iframe>
                <?php }
                if($currentSection->getPrezi()!=""){?>
                    <iframe src="<?php echo $currentSection->getPrezi()?>" width="750" height="450" frameBorder="0"></iframe>
                    <br /><br />

                <?php }
                if($currentSection->getGoogleDoc()!=""){?>
                    <iframe src="http://docs.google.com/viewer?url=<?php echo $currentSection->getGoogleDoc(); ?>&embedded=true"
                            width="600" height="780" style="border: none;"></iframe>

                <?php }
                if($currentSection->getArticle()!=""){?>
                    <p class="article"><?php echo $currentSection->getArticle()?></p>
                    <br /><br />
                <?php }
                if($currentSection->getLinks()!=""){?>
                    <h3>Links</h3>
                    <?php for($q=0; $q<count($currentSection->getLinks());$q++){?>
                        <a href="<?php $k = $currentSection->getLinks(); echo $k[$q]["path"]; ?>">
                            <p class="article links"><?php $k = $currentSection->getLinks(); echo $k[$q]["name"]?></p>
                        </a>
                        <br />
                    <?php } ?>
                <?php }
                if($currentSection->getAuthor()!=""){?>
                    <p class="article"><b>Author:</b> <?php echo $currentSection->getAuthor(); ?></p>
                <?php } ?>
            </article>
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
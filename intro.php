<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- static variables for php -->
        <?php include 'php_utility/strings.php'; ?>

        <!-- Page title-->
        <title> <?php print("Intro".$TITLE_APPEND); ?> </title>

        <!-- Page title icon -->
        <link rel="icon" href="/files/img/Logo/HistoryHotspot_logo_blue_small.png">

        <!-- External Content (e.g. fonts)-->
        <!-- The following font has been selected based off of its similarities to those specified as being friendly to the learning-impaired -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,800italic,800,700italic,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
        <!--<link href='https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>-->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:500,700' rel='stylesheet' type='text/css'>

        <!-- Website-specific layouts -->
        <?
            /*The base-style.html page is not included here on the basis that this is the intro page and most of the style
                specifications included via the document are not relevant here. */
        ?>
        <link rel="stylesheet" href="CSS/base/reset.css" />
        <link rel="stylesheet" href="CSS/base/base.css" />  
        <link rel="stylesheet" href="CSS/intro/intro.css" />
        <link rel="stylesheet" href="CSS/intro/sliderNavbar.css" />

        <!-- jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        

        <!-- Website-specific on-load JS and jQuery content -->
        <script type="text/javascript" src="Scripts/intro_on-load.js"></script>

        <base target="contentFrame"> <!-- makes all links target the primary content iframe by default-->
    </head>

    <body>
        
        <div id="wrap-page">
            <div id="page-header">
                <div id="intro-header" class="centered">
                    <header>
                        <img src="/files/img/Logo/HistoryHotspot_title_large.png" alt="History Hotspot" />
                    </header>
                </div>
            </div>
            <div id="wrap-slider"><!--
                --><?php readfile("pages/Static/sliderNavbar.html"); ?>
            </div>
            
        </div>

    </div><!--wrap-page div -->

    <script type="text/javascript" src="Scripts/intro.js"></script>
    </body>
</html>

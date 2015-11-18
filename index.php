<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="device-width, initial-scale=1" />

        <title>Example Page</title>

        <!-- External Content (e.g. fonts)-->
        <!-- The following font has been selected based off of its similarities to those specified as being friendly to the learning-impaired -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,800italic,800,700italic,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
        <!--<link href='https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>-->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:500,700' rel='stylesheet' type='text/css'>

        <!-- Website-specific layouts -->
        <link rel="stylesheet" href="CSS/reset.css" />
        <link rel="stylesheet" href="CSS/base.css" />  
        <link rel="stylesheet" href="CSS/base/sliderNavbar.css" />      

        <!-- jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        

        <!-- Website-specific on-load JS and jQuery content -->
        <script type="text/javascript" src="Scripts/Index_on-load.js"></script>

        <base target="contentFrame"> <!-- makes all links target the primary content iframe by default-->
    </head>
    <body>
        
        <div id="wrap-page">

            <?php
                readfile("Content/html/Static/header.html");
            ?>

            <div id="wrap-nav-content" class="">
                <div id="page-header">
                    
                </div>
                <?php
                    //readfile("Content/html/Static/navbar.html");
                ?>
                <?php
                    readfile("Content/html/Static/sliderNavbar.html");
                ?>

                <div id="nav-content-spacer"></div>
                
                <div id="wrap-content" class="">
                    <?php
                        readfile("Content/html/Home.html");
                    ?>
                </div>
            </div>

            <!--< ?php
                readfile("Content/html/Static/footer.html");
            ?>-->

        </div><!--wrap-page div -->

        <script type="text/javascript" src="Scripts/Index.js"></script>
    </body>
</html>

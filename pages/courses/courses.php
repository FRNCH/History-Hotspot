<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <?php //Static variables for php
            include realpath($_SERVER['DOCUMENT_ROOT'].'/php_utility/strings.php'); ?>

        <?php //Stylization, CSS stuff, etc.
            include realpath($ROOT."/pages/Static/base-style.html"); ?>

        <title> <?php print("Courses".$TITLE_APPEND); ?> </title>
    </head>
    <body>
        <?php readfile($ROOT."/pages/Static/header.html"); ?>
    </body>
</html>

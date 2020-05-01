<?php
$pageName .= 'pages/' . $_GET["page"] . '.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Wiki</title>
        <link rel="stylesheet" href="css/master.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Hex Studios Wiki</h1>
        <hr>

        <div id="sidenav">
            <b>Navigation</b>
                <?php include("pages/navigation.php"); ?>
        </div>
        <div id="wikipage">
        	<?php 
                if ($pageName == "pages/.php"){include("pages/welcome.php");}
                else {include($pageName);}
		    ?>
        </div>

        <div id="footer">
            <p>&copy;Copyright 2020, Hex Studios</p>
            <?php include("pages/navigation.php"); ?>
        </div>
    </body>
</html>

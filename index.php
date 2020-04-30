<?php

$pageName .= 'pages/' . $_GET["page"] . '.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Wiki</title>
        <link rel="stylesheet" href="css/master.css">
    </head>
    <body>
        <h1>Hex Studios Wiki</h1>
        <hr>

        <div id="sidenav">
            <b>Navigation</b>
            <ul>
                <li><a href="index.php?page=test">Test page</a></li>
                <li><a href="index.php?page=test2">Test page 2</a></li>
            </ul>
        </div>

        <div id="wikipage">
            <?php include($pageName);?>
        </div>
    </body>
</html>
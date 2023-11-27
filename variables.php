<?php
    $fonts = "verdana";           // PHP Variable here

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Syntax</title>
        <style>
            body{font-family: <?php echo $fonts; ?>}                    /* Changing fonts */
            .phpcoding{width: 900px; margin: 0 auto; background: #ddd}  
            .header, .footer{background: #444; color: #fff; text-align: center; padding: 20px}
            .header h2, .footer h2{margin: 0}
            .maincontainer {min-height: 400px; padding: 20px}  
        </style>
    </head>
    <body>
        <div class = "phpcoding">
            <section class = "header">
                <h2>PHP Syntax</h2>
            </section>
            
            <section class = "maincontainer">

                <?php
                    echo $fonts . "<br/>";  // dot is used to concatenate    // PHP Variable here

                    $a = 5;
                    echo $a . "<br/>";

                    echo $a + 20 . "<br/>";
                ?>

            </section>

            <section class = "footer">
                <h2>Lets Learn PHP - <?php echo $a; ?></h2>           <!-- PHP Variable here -->
            </section>
        </div>
    </body>
</html>
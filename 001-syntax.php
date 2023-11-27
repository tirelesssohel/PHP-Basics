
<html>
    <head>
        <title>PHP Syntax</title>
        <style>
            .phpcoding{width: 900px; margin: 0 auto; background: <?php echo "#ddd" ?>}         /* Here is also PHP */
            .header, .footer{background: #444; color: #fff; text-align: center; padding: 20px}
            .header h2, .footer h2{margin: 0}
            .maincontainer {min-height: <?php echo "400px" ?>; padding: 20px}                    /* Here is also PHP */
        </style>
    </head>
    <body>
        <div class = "phpcoding">
            <section class = "header">
                <h2>PHP Syntax</h2>
            </section>
            
            <section class = "maincontainer">

                <h2>PHP from heading 2</h2>
                <h2> <?php echo "PHP from inside echo" ?> </h2>                        <!-- Here is also PHP -->
                <?php   echo "<h2>PHP from inside heading</h2>"; ?>                    <!-- Here is also PHP -->

            </section>

            <section class = "footer">
                <h2>Lets Learn PHP</h2>
            </section>
        </div>
    </body>
</html>
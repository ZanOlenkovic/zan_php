<html>
    <head>
        <title> PHP lydes ir <?php print date('Y', strtotime('+' . rand(0, 10) . 'year')) ?></title>
        <style>
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .b-<?php print date('s') ?> {
                width: <?php print date('1s'); ?>vh;
                height: <?php print date('1s'); ?>vh;
                background-size: cover;
                background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAR_iJB0tLQMLXGJi6kn1AOjvAWkrGiLUnmfSRYAt07qWSQvXi-w&s") ;
            } 
            .b-00 {
                height: 60vh;
                width: 60vh;
                background-image: url(https://www.ready.gov/sites/default/files/2019-09/hero_nuclear_blast.jpg);
            }
        </style>
    </head>
    <body>
        <div class="b-<?php print date('s'); ?>"></div>

        <p> <?php print date('s'); ?></p>
    </body>
</html>

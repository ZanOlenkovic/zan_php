<html>
    <head>
        <title> PHP lydes ir <?php print date('Y', strtotime('+' . rand(0, 10) . 'year')) ?></title>
        <style>
            body {
                display: flex;
                flex-direction: column;
                align-item: center;
            }
            .b{
                width: <?php print date('s'); ?>px;
                height: <?php print date('s'); ?>px;
                background-size: cover;
                background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAR_iJB0tLQMLXGJi6kn1AOjvAWkrGiLUnmfSRYAt07qWSQvXi-w&s") ;
            } 
        </style>
    </head>
    <body>
        <div class="b"></div>
        <p> <?php print date('s') ?></p>
    </body>
</html>

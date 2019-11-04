<?php
$sekunde = date('s');
if ($sekunde % 2) {
    $class = 'apskritimas';
} else {
    $class = 'kvadratas';
}
?>
<html> 
    <head>
        <title><?php print 'orai' ?></title>
        <style>
            div{
                display:flexbox;
                justify-content: center;
                background-color: purple;
                width: 200px;
                height: 200px;

            }

            .apskritimas {
                border-radius: 100px;
                background-color: red;
            }
        </style>
    </head>
    <body>
        <div class="<?php print $class; ?>">
        </div>
    </body>

</html>

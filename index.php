<?php
$sunny= rand(0,1);
$img= 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVCkNjDgTJJlhVWss32UYpVyH9xGdBfD_WAgr9Q1fhu1KQ8knw&s';
$img_2= 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTqTftJvCRKSNzeUTzWQndmtTaXcTLKm2JArTKDuyDroy14SiM&s';
if($sunny){
    $s_1='Sauleta';
    $img_3=$img;
}
else{
    $s_1='Debesuota';
    $img_3=$img_2;
}
?>
<html> 
    <head>
        <title><?php print 'orai' ?></title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <img src="<?php print $img_3; ?>" </img>
        <p><?php print $s_1; ?></p>
    </body>
  
</html>

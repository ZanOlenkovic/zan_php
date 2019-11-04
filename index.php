<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);
$miegas = 'Miegosi  ant sofos!';
$miegas_2 = 'Nemiegosi ant sofos';
$img_1 = 'https://creativewomeninternational.com/wp-content/uploads/2019/10/BLOG-How-to-build-happiness-1024x1024.jpg';
$img_2 = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnx-g1QqNpoSBemsZioyH5HxfLgezjuhYg23QQ-O0I1OZUeoAwug&s';
if ($grizai_velai && $grizai_isgeres) {
    $h2 = 'Grizai velai ir isgeres';
    $h3 = $miegas;
    $img = $img_2;
} elseif ($grizai_velai > $grizai_isgeres) {
    $h2 = 'Grizai velai';
    $h3 = $miegas_2;
    $img = $img_1;
} elseif ($grizai_isgeres < $grizai_velai) {
    $h2 = 'Grizai isgeres';
    $h3 = $miegas_2;
    $img = $img_1;
} else {
    $h2 = 'Nieko nepadarei';
    $h3 = $miegas_2;
    $img = $img_1;
}
?>
<html> 
    <head>
        <title><?php print $h2 ?></title>
    </head>
    <h1>Buitine skaiciuokle</h1>
    <h2><?php print $h2 ?></h2>
    <h3><?php print $h3 ?> </h3>
    <img src="<?php print $img; ?>"</img>
</html>

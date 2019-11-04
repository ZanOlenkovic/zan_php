<html>
    <head>
        <title> PHP lydes ir <?php print date('Y', strtotime('+' . rand(0, 10) . 'year')) ?></title>    
    </head>
    <body>
      <?php
      $grizai_velai = rand(0,1);
      $grizai_isgeres = rand(0,1);
      if($grizai_velai && $grizai_isgeres){
          $h2='Grizai velai ir isgeres';
      }
      elseif($grizai_velai && !$grizai_isgeres){
          $h2='Grizai velai';
      }
       elseif($grizai_isgeres && !$grizai_velai){
          $h2='Grizai isgeres';
      }
      else{
          $h2='Nieko nepadarei';
      }
      ?>
        <h1>Buitine skaiciuokle</h1>
        <h2><?php print $h2 ?></h2>
    </body>
</html>

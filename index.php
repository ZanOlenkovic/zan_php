<html>
    <head>
        <title> PHP lydes ir <?php print date('Y', strtotime('+' . rand(0, 10) . 'year')) ?></title>
        <style>
            .dice{
                width: 250px;
                height: 250px;
            }
            
            .k1{
                background-image: url("http://dobbelsteen.virtuworld.net/img/1c.gif") ;
            }
            .k2{
                background-image: url("http://dobbelsteen.virtuworld.net/img/2c.gif") ;
            }
            .k3{
                background-image: url("http://dobbelsteen.virtuworld.net/img/3c.gif") ;
            }
            .k4{
                background-image: url("http://dobbelsteen.virtuworld.net/img/4c.gif") ;
            }
            .k5{
                background-image: url("http://dobbelsteen.virtuworld.net/img/5c.gif") ;
            }
            .k6{
                background-image: url("http://dobbelsteen.virtuworld.net/img/6c.gif") ;
            }
          
        </style>
    </head>
    <body>

          <div class="dice k<?php print rand(1, 6); ?> "></div>



       

    </body>
</html>

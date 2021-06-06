<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Switch statements</h1>
        <?php

        $weather = "Cloudy";

        switch ($weather) {
            case 'Sunny':
                echo "Weather is quite pleasent outside. <br>";
                break;

            case 'Rainy':
                echo "Its raining outside. <br>";
                break;

            case 'Cloudy':
                echo "It is expected to rain. <br>";
                break;
            
            default:
                echo "Weather cannot be forcast. <br>";
                break;

        }

       
        echo "<br>"; ?>

        <hr>

        <?php
        $restricted_area = 'Guard';

        switch ($restricted_area) {
            case 'Guard':
                echo 'Permission Granted. <br>';
                break;
            case 'office boy':
            case 'Public':
            case 'Media':
                echo "Permission denied. <br>";
                break;

            default:
                echo "See google.com for cupons";

            
        }


        
        ?>
    </body>
</html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Super Globals</h1>
        <?php
        
        //superglobals
        //GLOBALS 
        //$_POST 
        //$_GET
        //$_SERVER
        //$_COOKIE 
        //$_SESSION - destroy every time if user close browser
        //$_FILES
        
        
        //GLOBALS
        
        $x = 100;
        $y = 200;
        
        function add() {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        
        add();
        echo $z;
        
        
        
        
        
        
        
        
        echo "<br>";
        
        
        
        
        
        
       
        
        
        ?>
    </body>
</html>
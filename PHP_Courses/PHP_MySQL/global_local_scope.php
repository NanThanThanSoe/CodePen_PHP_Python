<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Global and Local Scope</h1>
        
        <?php
        
        $x = 10;  //global
        
        function myFunction() {
            $y = 20;  //local, can use only inside function
        }
        
        echo $x . "<br>";
        
        
        
        
        ?>

        
        
    </body>
</html>
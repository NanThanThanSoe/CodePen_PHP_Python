<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Super Global COOKIES</h1>
        <?php
        
        //COOKIES
        //small file that the web server stores in the client computer
        // easy to hack so dont use for sensitive info
        
        //arguments cookies
        //Name
        //Value
        //Expire
        //Path
        //Domain
        //Security
        
        
        //if you do not include an expiration date, the cookies will only be stored for the current session
        //$time = time() - 86400 * 30;
        $time = time() + 86400 * 30;
        setcookie("name", "Nan", $time); //always set on top ot documnets
        
        print_r($_COOKIE);
        
        
        echo "<br>";
        
        echo $_COOKIE['name'];
        

        
        
        
        ?>
        
        
    </body>
</html>
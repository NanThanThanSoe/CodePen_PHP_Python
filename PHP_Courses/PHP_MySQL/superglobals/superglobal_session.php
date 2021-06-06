<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Super Global SESSION</h1>
        <?php
        
        //superglobals
        //GLOBALS 
        //$_POST 
        //$_GET
        //$_SERVER
        //$_COOKIE 
        //$_SESSION - destroy every time if user close browser
        //$_FILES
        
        
        //SESSION
        //store user related data
        //good to use for sensitive infomation 
        //session exists as lonh as the browser is open
        
        
        session_start();
        
        //storing info
        
        $_SESSION['Name'] = "Nan";
        
        $_SESSION['Age'] = 27;
        
        
        
        echo "Hello " . $_SESSION['Name'] . "<br>";
        
        echo "Hello " . $_SESSION['Age'] . "<br>";
        
        
        
        session_destroy();  //session not destroy unless close the browser
        
        echo "Hello " . $_SESSION['Name'] . "<br>";
        
        
        
        
        
        
        
        
        
        ?>
        
        
    </body>
</html>
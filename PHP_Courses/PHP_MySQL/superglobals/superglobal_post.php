<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Super Global POST</h1>
        <?php
        
        //superglobals
        //GLOBALS 
        //$_POST 
        //$_GET
        //$_SERVER
        //$_COOKIE 
        //$_SESSION - destroy every time if user close browser
        //$_FILES
        
        
        //POST
        
        // collect data from html forms (invisible) 
        
        if (isset($_POST)) {
            echo $_POST['name'] . ", your form is submitted";
        }
        
        echo "<br>";
        print_r($_POST);
        
        ?>
        
        <form action="" method="post">
            <input type="text" name ="name">
            <input type="text" name ="age">
            <button type="submit">SUBMIT</button>
        </form>
        
        
        
        
        
        
    </body>
</html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <?php
        //Multidimensional arrays
        
        //Expensive 
        //Audi, Mercedes, BMW
        
        //Inexpensive
        //Volvo, Ford, Toyota
        
        
        $cars = array(
            "Expensive" => array("Audi", "Mercedes", "BMW"), 
            "Inexpensive" => array("Volvo", "Ford", "Toyota")
        );
        
        echo $cars["Expensive"][0];
        echo $cars["Inexpensive"][0];
        
        
        
        ?>
    </body>
</html>
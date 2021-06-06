<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>For each loop</h1>
        
        <?php
        
        //foreach - iterate over array variables 
        
        //foreach (array_expression as $key)
        $names = array('nan', 'soe', 'asgar');
        $person = array ('Name' => 'Dary', 'age' => 30, 'Gender' => "Male");
        foreach ($names as $key) {
            echo "My name is $key. <br>"   ;
        }
        
        echo "<hr>";
        
        foreach ($person as $key => $value) {
            echo $key . " : ". $value . "<br>"   ;
        }
    
        
        
        ?>

        
        
    </body>
</html>
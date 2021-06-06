<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Create and Write Files -  get file</h1>
                
        
        <?php
        
        $filePath = "uploads/file.txt";
        
        $output = file_get_contents($filePath); //read from file
        
        
        //echo $output . "<br>"; // cannot break 
       
        
        // to create break in between
        $ages = explode("\n", $output);
        
        $totalAge = 0;
        $i = 0;
        
        foreach ($ages as $age) {
            echo $age . "<br>";
            
            $totalAge = $totalAge + $age;
            
            $i++;
        }
        
        echo "The average age is " . ($totalAge / $i);
        
        
        ?>
        
        
    </body>
</html>
<?php

require_once 'includes/database.php';

?>
   

   
<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
    
        <?php
        
        $sql = "SELECT * FROM users WHERE id = 2";
        $result = mysqli_query($conn, $sql);
        
        $rowCount = mysqli_num_rows($result);
        
        if ($rowCount > 0) {
            while($row = mysqli_fetch_assoc($result)) { //loop through data and print it out
                echo $row['username'] . "<br>";
                //echo $row['password'] . "<br>";
            }
        } else {
            echo "No results found.";
        }
        
        
        ?>

    
        

    </body>
</html>
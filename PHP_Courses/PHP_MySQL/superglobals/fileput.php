<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Create and Write Files - put file</h1>
                
        
        <?php
            
        
//        $myFile = fopen("uploads/file.txt", "w");  //look for file.txt or create it
//        
//        $txt = "My age is " . $_POST['age'] . "\n";
//        fwrite($myFile, $txt);
//        
//        fclose($myFile); //need to close after write
//        
//        echo $myFile;
        
        if (isset($_POST['submit'])) {
            $myFile = fopen("uploads/file.txt", "a");  //look for file.txt or create it
            // w overwite text
            // a will keep all text
        
            $txt = "My age is " . $_POST['age'] . "<br>";
            
            fwrite($myFile, $txt);
            
            fclose($myFile);
        }
        
        
        
        
        ?>
        
        <form action ="fileput.php" method = "post">
            <input type="text" name="age">
            <button type="submit">SUBMIT</button>
        </form>
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>
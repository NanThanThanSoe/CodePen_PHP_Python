<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Super Global FILES</h1>
        <?php
        
        //$_FILES
        
        //how to upload files
        // 1. upload it to the root
        // 2. directly to the database
        
        
        // 1. upload it to the root
        
        //enctype="multipart/form-data"
        //specify how th form data should be encoded
        
        $name = $_FILES['file']['name'];
        echo $name;
        echo "<br>";
        $type = $_FILES['file']['type'];
        echo $type;
        echo "<br>";
        $tmp_location = $_FILES['file']['tmp_name'];
        echo $tmp_location;
        echo "<br>";
        $error = $_FILES['file']['error'];
        echo $error;
        
        
        
        ?>
        
        
        <form action="superglobal_files.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit">SUBMIT</button>
        </form>
        
        
    </body>
</html>
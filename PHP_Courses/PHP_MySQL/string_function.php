<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>String functions</h1>
        <?php
        
        //string function
        
        
        //strlen
        $str = "Today is a sunny day ";
        
        echo strlen($str) . "<br>";
        
        //string word count
        $firstName = "My first name is nan";
        echo str_word_count($firstName) . "<br>";
        
        //how to find text within a string
        $email = 'info@gmail.com';
        
        if (strpos($email, "@")) {
            echo "This is a valid email";
        } else {
            echo "This is an email input failed";
        }
        
        echo "<br>";
        
        //ucwords - uppercase first letter of a word
        echo ucwords("What is your name?");
        
        echo "<br>";
        
        //strtoupper - uppercase every letter
        echo strtoupper("What is your name?");
        
        echo "<br>";
        
        //strtolower - lowercase every letter
        echo strtolower("What is your name?");
        
        
        
        
        
       
        
        
        ?>
    </body>
</html>
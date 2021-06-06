<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Strings</h1>
        <?php

        echo "My name is Nan Than Than Soe.";     
        echo "<br>";
        echo "My age is 27.";
        echo "<br>";

        $color = "red";
        $shirt = "sleev-less";
        $combination = $color . " " . $shirt;
        echo $combination;
        echo "<br>";

        echo $color . " is my favourite color.";
        echo "<br>";
        echo "{$color} is my favourite color.";
        echo "<br>";


        $phrase1 = "student who come late ";
        $phrase2 = "in class sit in the last with Rock";
        $combine = $phrase1;
        $combine .= $phrase2;

        echo "Original full string: " . $combine;
        echo "<br>"; echo "<br>";


        echo "Uppercase first: " . ucfirst($combine) . "<br>";
        echo "Uppercase words: " . ucwords($combine) . "<br>";
        echo "Lowercase: " . strtolower($combine) . "<br>";
        echo "Uppercase: " . strtoupper($combine) . "<br>";
        echo "<br>"; echo "<br>";


        echo "Repeat: " . str_repeat($combine, 3) . " <br>";
        echo "Make substring from one poing to another: " . substr($combine, 5, 10) . "<br>";
        echo "Find position of any specific word: " . strpos($combine, "come") . "<br>";
        echo "Find character: " . strchr($combine, "R") . "<br>";
        echo "<br>"; echo "<br>";


        echo "Total length of string: " . strlen($combine) . "<br>";
        echo "Trim: " . "A" . trim(" A C D ") . "E" . "<br>";
        echo "Find specific and show after: " . strstr($combine, "come") . "<br>";
        echo "Replace word with new: " . str_replace("sit", "stand", $combine) . "<br>";





        
        echo "<br>";
        echo "<br>";


        
        ?>
    </body>
</html>
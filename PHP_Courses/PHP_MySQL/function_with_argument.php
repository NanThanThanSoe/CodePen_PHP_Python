<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Functions with arguments or parameters</h1>
        
        <?php
        
        //built-in and user-defined functions
        //reusability, easy for error detection, and maintained
        
        
        //camel case - every word after the first one is capital 
        //myFunction()
        
        //lowercase - all lowercase underscore in between
        //my_function()
        
        //pascal case - every word is capitalize
        //MyFunction()
        
        // recommand to use camel case and lowercase 
        
        //function calculator(parameter, parameter, etc...)
        
        
        //variables
        $num1 = 5;
        $num2 = 6;
        
        //function with parameters
        function calculator($num1, $num2=20) {
            echo $num1 * $num2 . "<br>";
            
        }
        
        //call function with two arguments
        calculator($num1, $num2);
        calculator($num1);  //bcoz $num2 is with default value
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ?>

        
        
    </body>
</html>
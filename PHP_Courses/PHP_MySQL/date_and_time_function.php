<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Date and time functions</h1>
        <?php
        
        
        //date and time functions
        
        
        
        //Date 
        // 'd' = Day
        // 'j' = day without zero
        // 'D' = day of week (3 letters)
        // 'l' = full day of the week
        // 'm' = month as a number with zero
        // 'n' = month as a number without zero
        // 'M' = Month (3 letters)
        // 'F' = full month
        // 'y' = two-digit year
        // 'Y' = Full year
        
        
        echo date('d');
        echo "<br>";
        
        echo date('j');
        echo "<br>";
        
        echo date('D');
        echo "<br>";
        
        echo date('l');
        echo "<br>";
        
        echo date('m');
        echo "<br>";
        
        echo date('n');
        echo "<br>";
        
        echo date('M');
        echo "<br>";
        
        echo date('F');
        echo "<br>";
        
        echo date('y');
        echo "<br>";
        
        echo date('Y');
        echo "<br>";
        
        
        echo date('Y/m/d'); echo "<br>";
        echo date('d/m/Y');
       
        echo "<hr>";
        
        
        //time 
        
        // 'g' = hours in 12-hour format without zero
        // 'h' = hour in 12-hour format without zero
        // 'G' = hours 24-hour without zero
        // 'H' = 24-hour with zero
        // 'a' = am/pm in lowercase
        // 'A' = am/pm in uppercase
        // 'i' = minutes wihtout leading zeros
        // 's' = seconds without leading zeros
        
        
        echo date('H:i:s'); 
        echo "<br>";
        
        echo date('H:i:s a'); 
        echo "<br>";
        
        echo date('h:i:s'); 
        echo "<br>";
        
        //set time zone
        date_default_timezone_set('Europe/Amsterdam');
        
        
        //string to time
        $time = strtotime("4:00pm December 03 2020");
        
        echo $time; // UNIX timestamp
        
        echo "<br>";
        echo date('m/d/y H:i:s a');
        
        echo "<br>";
        echo date('m/d/y H:i:s a', $time);
        
        
        
        
        
        echo "<br>";
        
        
        
        
        
        
       
        
        
        ?>
    </body>
</html>
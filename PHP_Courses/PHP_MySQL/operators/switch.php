<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>switch statements</h1>
        
        <?php
  
        //switch statement
        
        $role = "Employee";
        
        switch ($role) {
            case 'Visitor':
                echo "Welcome visitor.";
                break;
            case 'Admin':
                echo "Welcome Admin.";
                break;
            case 'Superadmin':
                echo "Welcome Superadmin.";
                break;
            case 'Boss':
                echo "Welcome Boss.";
                break;
            default:
                echo "I dont know you.";
                
                
        }
        
      
        
        
        
        ?>

        
        
    </body>
</html>
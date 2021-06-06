<?php

if (isset($_POST['submit'])) {  // if the user click the submit button
    
    //add database connection
    require 'database.php';
    
    //input from form register
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        header("Location: ../index.php?error=emptyfields"); 
        exit();
        
    } else {
        
        // if the data match with the data in database
        $sql = "SELECT * FROM users WHERE username = ?";  //variables
        $stmt = mysqli_stmt_init($conn);  //statement
        
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror"); 
            exit();
            
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);  //bind param
            mysqli_stmt_execute($stmt); //execute
            $result = mysqli_stmt_get_result($stmt); //get the results
            
            if ($row = mysqli_fetch_assoc($result)) {  //if we get back the resutl
                //check if password match
                $passCheck = password_verify($password, $row['password']); // $row['password'] is password from database
                
                if ($passCheck == false) {
                    header("Location: ../index.php?error=wrongpassword"); 
                    exit();
                    
                } elseif ($passCheck == true) { //if user enter password and password from database correct
                    
                    session_start();
                    $_SESSION['sessionid'] = $row['id'] ;
                    $_SESSION['sessionUser'] = $row['username'] ;
                    header("Location: ../index.php?success=loggedin"); 
                    exit();
                    
                } else {
                    header("Location: ../index.php?error=wrongpassword"); 
                    exit();
                }
                
                
            } else {
                header("Location: ../index.php?error=nouser"); 
                exit();
            }
            
        }
    }
    
    
    
    
} else {
    header("Location: ../index.php?error=accessforbidden"); 
    exit();
}


?>
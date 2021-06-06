<?php

if (isset($_POST['submit'])) {
    
    //add database connection
    require 'database.php';
    
    //input from form register
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmpassword'];
    
    if (empty($username) || empty($password) || empty($confirmPass)) {
    //if ($username != "" || $password != "" || $confirmPass != "") {
        header("Location: ../register.php?error=emptyfields&username=" .$username); //redirect to the page, &username= is to remember username, show this info in the url
        exit(); 
        
    } elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) { //check string
        header("Location: ../register.php?error=invalidusernames&username=" .$username); 
        exit(); 
         
    } elseif ($password !== $confirmPass) {  
        header("Location: ../register.php?error=passworddonotmatch&username=" .$username); 
        exit(); 
        
    } else {
        // to check if the username already exist
        
        $sql = "SELECT username FROM users WHERE username = ?"; //important to use ?
        $stmt = mysqli_stmt_init($conn); //initialize statement
         if (!mysqli_stmt_prepare($stmt, $sql)) {  //if fail
            header("Location: ../register.php?error=sqlerror"); 
            exit();
             
         } else {
             mysqli_stmt_bind_param($stmt, "s", $username);  //pass only username so only s
             mysqli_stmt_execute($stmt); 
             mysqli_stmt_store_result($stmt); //take results from database and store in stmt
             $rowCount = mysqli_stmt_num_rows($stmt);
             
             if ($rowCount > 0) {
                header("Location: ../register.php?error=usernametaken"); 
                exit();
                 
             } else {
                 $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                 $stmt = mysqli_stmt_init($conn);
                 
                 if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../register.php?error=sqlerror"); 
                    exit();
                     
                 } else {
                     
                     $hashedPass = password_hash($password, PASSWORD_DEFAULT); //to secure password so need to hash
                     mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPass); //pass  username and password so two ss, param need to be in the same order
                     mysqli_stmt_execute($stmt); 
                     header("Location: ../register.php?success=registered"); 
                     exit();
                     
                 }
                 
             }
             
         }
        
    }
    
    mysqli_stmt_close($stmt);  //close statement 
    mysqli_close($conn); //close database
    
    
}








?>
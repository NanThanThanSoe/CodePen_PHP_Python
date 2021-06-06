<?php


if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];  //find file name
    $tmp_name = $_FILES['file']['tmp_name']; //temp name
    $size = $_FILES['file']['size']; //find file size
    $error = $_FILES['file']['error']; //find errors
    
    
    //explode from punctuation mark
    $tmpExtension = explode('.', $name); //split string
    
    // to confirm PNG = png
    $fileExtension = strtolower(end($tmpExtension));
    
    //allow extensions
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');
    
    
    // 0 is no error, 1 is error
    if (in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {  //if there is an error
            if ($size < 30000) {  //check file size
                $newFileName = uniqid('', true) . "." . $fileExtension; // to avoid overwite image
                
                $fileDestination = "uploads/" . $newFileName; //where to upload
                
                move_uploaded_file($tmp_name, $fileDestination);
                
                //redirect to the same location 
                header("Location: files.php?uploadedsuccess"); // ?uploadedsuccess check whether it is success
                // you will see upload successful in url
                
                
            } else {
                echo "Sorry, your file size is too big.";
            }
            
        } else {
            echo "Sorry, there was an error. Try again!";
        }
        
    } else {
        echo "Sorry, your file type is not accepted.";
    }
    
}

?>



















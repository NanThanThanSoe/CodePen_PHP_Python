<!DOCTYPE>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <?php

        //print_r($_POST);

        $username = $_POST["Username"];
        $password = $_POST["Password"];
        $submit = $_POST["Submit"];

        if (isset($_POST["Submit"])) {
            echo "Successful log in. <br>";
            echo "Welcome {$username} <br>";
        }

        echo "<hr>";

        /*if (isset($username) &&! empty($username)) {
            echo "Username is set with the name of: {$username} <br>";
        } else {
            echo "No username detected. <br>";
        }

        if (isset($password) &&! empty($password)) {
            echo "Password : {$password} <br>";
        } else {
            echo "No password detected. <br>";
        } */



        //setting default username and password
        // no error if no username and password enter

        if (isset($_POST["Username"])) {
            $username  = $_POST["Username"];
            echo "$username  <br>";
        } else {
            $username = "";
        }

        if (isset($_POST["Password"])) {
            $password  = $_POST["Password"];
            echo "$password  <br>";
        } else {
            $password = "";
        }



        ?>
    </body>
</html>
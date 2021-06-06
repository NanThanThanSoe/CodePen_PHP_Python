<?php
if (isset($_POST["Submit"])) {  //if the button is submit

    $username = $_POST["Username"];  //grab the name of input
    $password = $_POST["Password"];  //grab the name of input
    //$_POST["Username"];
    //$_POST["Password"];

    if ($username == "Nan" && $password == "nansoe") {
        echo "<h2>Welcome: {$_POST["Username"]}</h2>";
    } else {
        echo "<h2>Account doesn't exist. Try again!</h2>";
    }

} else {
    echo "<h2>Login in required</h2>";
}


?>

<!DOCTYPE>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <fieldset>
            <legend>HTML 5 Form</legend>
            <form action = "" method = "POST">  
                <label for ="username"> Username: </label>
                <input type="text" name="Username"><br><br>

                <label for = "password">Password: </label>
                &nbsp;<input id = "password" type="password" name="Password"><br>

                <input type="submit" name="Submit" value= "Submitted">

            </form>
        </fieldset>
    </body>
</html>
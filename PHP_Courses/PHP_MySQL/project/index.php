<?php
require_once 'includes/header.php';
?>


<?php

if (isset($_SESSION['sessionid'])) {
    echo "You are logged in!";
} else {
    echo "Home";
}


?>






<?php
require_once 'includes/footer.php';
?>
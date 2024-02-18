
<?php
    include_once('db.php');

    session_start();
    $_SESSION['loggedIn'] = false;



    
    session_destroy();






    header("Location: home.php?info=loggedOut");
    exit();

?>
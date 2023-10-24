<?php

    $_SESSION['previous'] = basename($_SERVER['PHP_SELF']);

   

    $conn = "";
    session_start();
    include "confs/head.php";
?>



<?php
    if(isset($_SESSION["username"]) && isset($_SESSION["user_role"]))
    {
        ?>
        <h1>Administracia</h1>
        <a href='buildings.php'>Sprava budov</a>
        <br>
        <a href='rooms.php'>Sprava miestnosti</a>  
<?php
    }


    if (isset($_SESSION['previous'])) {
        if (basename($_SERVER['PHP_SELF']) != $_SESSION['username']) {
             session_destroy();
             ### or alternatively, you can use this for specific variables:
             ### unset($_SESSION['varname']);
        }
     }
?>

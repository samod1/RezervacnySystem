<?php
    session_start();
    $conn="";
    include 'confs/head.php';
    

    //echo $_SESSION["username"];
?>


<h1>vitajte v dasboarde</h1>

<?php
if(isset($_SESSION['username']) && isset($_SESSION['user_role']))
{
    echo "<a href='profile_detail.php'>Detail profilu</a><br>";

    if($_SESSION['user_role'] == "admin")
    echo "<a href='administration.php'>Administracia</a>";
}

else
{
    echo "Session expired login now";
}
    

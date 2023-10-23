<?php
    $conn = "";
    include "confs/head.php";
    session_start();

    /* SQL pre zistenie mena pouzivatela */
    
    $query= "SELECT id_user, username, password, address, ICO, DIC, email, telefonne_cislo, user_role, name, surname FROM user WHERE username='".$_SESSION["username"]."'";
    $result = mysqli_query($conn,$query);
?>

<?php
    while($row=mysqli_fetch_assoc($result))
    {
        echo $row['username'];
        echo "<br>";
        echo $row['address'];
        echo "<br>";
        echo $row['ICO'];
        echo "<br>";
        echo $row['DIC'];
        echo "<br>";
        echo $row['email'];
        echo "<br>";
        echo $row['telefonne_cislo'];
        echo "<br>";
        echo $row['name'];
        echo "<br>";
        echo $row['surname'];
        


    }
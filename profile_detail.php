<?php
    session_start();
    $conn = "";
    include "confs/head.php";
    

    /* SQL pre zistenie mena pouzivatela */
    
    $query= "SELECT id_user, username, password, address, ICO, DIC, email, telefonne_cislo, user_role, name, surname FROM user WHERE username='".$_SESSION["username"]."'";
    $result = mysqli_query($conn,$query);
?>
    <h1>Informácie o používateľovi</h1>
<?php
    while($row=mysqli_fetch_assoc($result))
    {
        echo "Používateľské meno: ". $row['username'];
        echo "<br>";
        echo "Adresa: ". $row['address'];
        echo "<br>";
        echo "IČO: ". $row['ICO'];
        echo "<br>";
        echo "DIČ: ". $row['DIC'];
        echo "<br>";
        echo "E-mailová adresa: ". $row['email'];
        echo "<br>";
        echo "Telefónne číslo: ". $row['telefonne_cislo'];
        echo "<br>";
        echo "Meno: ". $row['name'];
        echo "<br>";
        echo "Priezvisko: ". $row['surname'];
        


    }
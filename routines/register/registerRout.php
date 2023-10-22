<?php 
    /**DB include*/
    $conn ='';
    include "db.php";

    if(isset($_POST["submit"]))
    {

        if(isset($_POST["ICO"]))
        {
            $user_role='firm';
            $query = 'INSERT INTO user (id_user, username, password, address, ICO, DIC, email, telefonne_cislo, user_role) VALUES(?,?,?,?,?,?,?,?,?)';
            $id=0;
            $username = $_POST["username"];
            $password = $_POST["password"];
            $address = $_POST["address"];
            $ico = $_POST["ICO"];
            $dic = $_POST["DIC"];
            $email = $_POST["email"];
            $tel = $_POST["telefonne_cislo"];
            $user_role = $_POST["user_role"];


            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt,$query);
            mysqli_stmt_bind_param($stmt,'isssissss',$id,$username,$password,$address,$ico,$dic,$email,$tel,$user_role);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    else
    {
        $user_role='student';
        $query = 'INSERT INTO user (id_user, username, password, address, ICO, DIC, email, telefonne_cislo, user_role) VALUES(?,?,?,?,?,?,?,?,?)';
        $id=0;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $address = $_POST["address"];
        $ico = $_POST["ICO"];
        $dic = $_POST["DIC"];
        $email = $_POST["email"];
        $tel = $_POST["telefonne_cislo"];
        $user_role = $_POST["user_role"];


        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$query);
        mysqli_stmt_bind_param($stmt,'isssissss',$id,$username,$password,$address,$ico,$dic,$email,$tel,$user_role);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }    
        
    }
    



?>
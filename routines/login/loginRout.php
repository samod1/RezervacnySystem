<?php
$conn="";
include "../../confs/head.php";

if(isset($_POST["send"]) && isset($_POST["username"]) && isset($_POST["password"])) 
{
    //$password = $_POST['password'];
    $password = hash("md5",$_POST["password"]);
    $query = "SELECT username, user_role  FROM user WHERE username ='". $_POST['username']."' and password ='". $password ."'";
    echo $query;
    $result = mysqli_query($conn,$query);
    //$count = mysqli_num_rows($result);

   if($result)
    {
            $count = mysqli_num_rows($result);

            if($count != 0)
            {
                header("Location: ../../dashboard.php");
            ?> 
            
                <p>Prihlasenie prebehlo uspesne, ak vas nepresmeruje na dashboard prosim kliknite na tento <a href='../../dashboard.php'>odkaz</a></p> 
            
            <?php
                session_start();
                while($row = mysqli_fetch_assoc($result))
                {
                    echo $row['username'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['user_role'] = $row['user_role'];
                    //$_SESSION = $row['username'];    
                }

        }

        else
        {
            header("Location: ../../index.php");
        }

    }
    else
    {
        echo "pri vykonavani SQL operacie nastala chyba!";
    }
    
    //echo $count;
    
}

else
{
        header("Location: https://www.google.sk");
}



?>
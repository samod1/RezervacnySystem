<?

if(isset($POST["send"]) && isset($POST["username"]) && isset($POST["password"])) 
{
    $query = "SELECT * from USERS where username =". $POST['username']." and ". $POST['password'];
    $result = mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);

    if($count != 0)
    {
        header("Location: index.php");
    }

    else
    {
        header("Location: dashboard.php");
        echo "<p>Prihlasenie prebehlo uspesne, ak vas nepresmeruje na dashboard prosim kliknite na tento <a href='dashboard.php'>odkaz</a></p>";
    }
}

else
{
        header("Location: www.google.sk");
}



?>
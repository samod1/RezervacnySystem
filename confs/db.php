<?php
    $user = "rezervacny_syst1";
    $pass = "f2Hugfyb";
    $port = 3306;
    $server = "db.dw082.nameserver.sk";
    $db = "rezervacny_system";

    $conn = mysqli_connect($server,$user,$pass,$db,$port);

    if(!$conn)
    {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        Pripojenie na databazu <b>". $server . "</b> zlyhalo
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
    }

    else
    {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        Pripojenie na databazu <b>". $server . "</b> prebehlo uspesne
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
    }
?>
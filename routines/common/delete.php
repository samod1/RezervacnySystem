<?php
    $conn = "";
    include "../../confs/db.php";

    if(isset($_GET['id']) && $_GET['type'] == 'building')
    {
        $id = $_GET['id'];
        $query = "DELETE FROM rezervacny_system.building WHERE id_building=?";

        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $query);
        mysqli_stmt_bind_param($stmt,'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        
        header("Location: ../../buildings.php");
    }

    if(isset($_GET['id']) && $_GET['type'] == 'room')
    {
        $id = $_GET['id'];
        $query = "DELETE FROM rezervacny_system.building WHERE id_building=?";

        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $query);
        mysqli_stmt_bind_param($stmt,'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: ../../buildings.php");
    }

    if(isset($_GET['id']) && $_GET['type'] == 'table')
    {
        $id = $_GET['id'];
        $query = "DELETE FROM rezervacny_system.building WHERE id_building=?";

        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $query);
        mysqli_stmt_bind_param($stmt,'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: ../../buildings.php");
    }

    
    

?>
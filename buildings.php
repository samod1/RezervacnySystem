<?php

if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
    $conn = "";
    include "confs/head.php";


?>
    <div class="row">
        <div class="col-6"><h1>Administracia budov</h1></div>
        <div class="col-6"><a class="btn btn-primary btn-lg btn-block" href="create_building.php">Vytvorenie novej budovy</a></div>

    </div>
    

    <h2>Zoznam Budov</h2>

    <table class="table">
        <tr class="thead-light">
            <th>Nazov budovy</th>
            <th>Pocet poschodi</th>
            <th>Vytvorene</th>
            <th colspan="4">Akcie</th>
        </tr>
        <?php
            $query = "SELECT id_building,u.name as username ,u.surname, b.name, b.floors, b.created, b.createdBy
            FROM building b INNER JOIN user u on b.createdBy = u.id_user";
            $result = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["floors"]?></td>
                    <td><?php echo $row["created"]." - ".$row["username"]." ".$row['surname']?></td>
                    <td><a class="btn btn-danger" href="routines/common/delete.php?id=<?php echo $row['id_building']?>&type=building">Zmazat</a></td>
                    <td><a class="btn btn-success" href="#?<?php echo $row['id_building']?>">Prehliadat budovu</a></td>
                    <td><a class="btn btn-warning" href="create_room.php?id=<?php echo $row['id_building']?>">Pridat miestnost do budovy</a></td>
                    <td><a class="btn btn-info" href="#?<?php echo $row['id_building']?>">Upravit budovu</a></td>
                    <td>
                </tr>
                <?php
            }

        ?>
    </table>

<?php
} 
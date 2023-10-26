<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
    $conn = "";
    include "confs/head.php";
    ?>
<form method="POST">
        <input type="hidden" value="0" name="id_building" required><br>

        <label for="name">Nazov budovy:</label>
        <input type="text" name="name" required><br>

        <label for="floors">Pocet poschodi:</label>
        <input type="number" name="floors" required><br>


        <label for="building">Building:</label>
        <input type="text" name="building" required><br>


        <input type="hidden" name="createdBy" value="<?php echo $_SESSION['id_user'];?>">
        <input type="submit" name="submit" value="Submit">
        


        <?php
            if(isset($_POST['submit']))
            {
                $id_building = $_POST['id_building'];
                $name = $_POST['name'];
                $floors = $_POST['floors'];
                $created = date('Y-m-d H:i:s'); // You can modify the date format as needed
                $createdBy = $_POST['createdBy'];


                $query = "INSERT INTO building (id_building, name, floors, created, createdBy) VALUES(?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$query);
                mysqli_stmt_bind_param($stmt,'isisi',$id_building,$name,$floors,$created,$createdBy);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
            }
        }
        ?>
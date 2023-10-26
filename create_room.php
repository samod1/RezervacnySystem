<?php

if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
    $conn = "";
    include "confs/head.php";


?>
    <h1>Vytvorenie miestnosti</h1>

    <form method="POST" action="routines/common/insert.php">
        <input type="hidden" name="id_room" value="0">
        <input type="hidden" name="id_building" value="<?php echo $_GET['id']; ?>">
        <input type="hidden" name="created_by" value="<?php echo $_SESSION['id_user']; ?>">

        <!--<label for="id_room">Room ID:</label>
        <input type="text" name="id_room" required><br> -->

        <label for="room_no">Room Number:</label>
        <input type="text" name="room_no" required><br>

        <select name="floor">
            <?php 
            $query = "SELECT floors FROM building WHERE id_building =".$_GET['id'];
            $result = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_assoc($result))
            {
                for($i=1; $i<=$row['floors']; $i++)
                {
                    echo "<option value='$i'>$i</option>";
                }
                
            } 
            ?>
            
            
        </select>

        <label for="extras">Extras:</label>
        <input type="text" name="extras"><br>

        <input type="hidden" name="type" value="room">

        <input type="submit" name="submit" value="Submit">
    </form>

<?php
}
?>
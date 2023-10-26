<?php
        $conn = '';
        include "../../confs/db.php";

        if(isset($_POST['submit']) && $_POST['type'] == 'room')
                    {
                        /**
                            * id_room: 0
                            *room_no: T02.3.205
                            
                            *created_by: 5
                            
                            
                            *id_building: 2
                            *floor: 1
                            *type: room
                         */
                        echo "vykonava sa podmienka";
                        $id_room = $_POST['id_room'];
                        $room_no = $_POST['room_no'];
                        $created = date('Y-m-d H:i:s'); // You can modify the date format as needed
                        $createdBy = $_POST['created_by'];
                        $id_building = $_POST['id_building'];
                        $floor = $_POST['floor'];


                        $query = "INSERT INTO rezervacny_system.rooms (id_room, room_no, created, created_by, id_building,floor) VALUES (?,?,?,?,?,?)";
                        $stmt = mysqli_stmt_init($conn);
                        mysqli_stmt_prepare($stmt,$query);
                        mysqli_stmt_bind_param($stmt,'issiii',$id_room,$room_no,$created,$createdBy,$id_building,$floor);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_close($stmt);
        
                        header("Location: ../../rooms.php");
                    }
?>
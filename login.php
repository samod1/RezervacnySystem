<?php
    include "confs/head.php";
?>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-3">
                <form class="form-group" method="post" action="routines/login/loginRout.php">
                <label for="username">Pouužívateľské meno</label>
                <input type="text" name="username" id="username"> <br>

                <label for="username">Heslo</label>
                <input type="password" name="password" id="password"> <br>

                <input class="btn btn-primary" type="submit" name="send" value="Prihlásiť sa">
                <a class="btn btn-secondary" type="button" href="register.php">Registruj sa</a> <br>
            </form>
        </div>
        <div class="col-3"></div>
        
    </div>
    

</body>
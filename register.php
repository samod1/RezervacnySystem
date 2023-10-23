<?php
    include "confs/head.php";
?>

<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
            <form class="form-group" method="POST" action="routines/register/registerRout.php">
                <div class="form-group">
                    <label>Prihlasovacie meno</label>
                    <input class="form-control form-control-lg" type="text" name="username" required>
                </div>
                <div class="form-group">
                <label>Heslo</label>
                <input class="form-control form-control-lg" type="password" name="password" required>
                </div>
                <div class="form-group">
                    <label>Adresa</label>
                    <input class="form-control form-control-lg" type="text" name="address" required>
                </div>
                <div class="form-group">
                    <label>ICO</label>
                    <input class="form-control form-control-lg" type="text" name="ICO">
                </div>
                <div class="form-group">
                    <label>DIC</label>
                    <input class="form-control form-control-lg" type="text" name="DIC">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control form-control-lg" type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Telefonne cislo</label>
                    <input class="form-control form-control-lg" type="text" name="telefonne_cislo" required>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" class="btn btn-lg btn-block btn-primary" name="submit"> 
                        </div>
                        <div class="col-6">
                            <input class="btn btn-lg btn-block btn-secondary" type="reset">
                        </div>
                        <!-- TODO Doplnit polia pre meno a priezvisko -->
                    </div>
                </div>
            </form>
    </div>
    <div class="col-4"></div>
</div>

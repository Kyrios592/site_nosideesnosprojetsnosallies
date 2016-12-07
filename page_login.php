<?php
/*
** Created by PhpStorm.
** User: ferdin_k
** Date: 12/2/16
** Time: 11:13 AM
*/
?>
<div class="container">
    <div class="row blue-container">
        <div class="col-xs-12 center">
            <?php
            if (isset($_GET['iuop'])) {
                ?>
                <p class="text-danger">Mauvais Nom d'utilisateur et/ou Mot de passe</p>
                <?php
            }
            ?>
            <form role="form" method="post" action="php_scripts/user_connect.php">
                <div class="form-group">
                    <label for="user_name">Nom d'utilisateur :</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" />
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" class="form-control" id="password" name="password" />
                </div>
                <button type="submit" class="btn btn-default">Envoyer</button>
            </form>
        </div>
    </div>
</div>

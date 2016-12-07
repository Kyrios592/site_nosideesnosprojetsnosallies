<?php
/*
** Created by PhpStorm.
** User: ferdin_k
** Date: 12/1/16
** Time: 5:38 PM
*/
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h4>FAISONS AVANCER NOS IDEES ET NOS PROJETS AVEC NOS ALLIES ...</h4>
            <h5>BIENVENUE SUR NOS IDEES, NOS PROJETS, NOS ALLIES - CONTACT</h5>
            <?php
            if (isset($_GET['send']) && $_GET['send'] == 1) {
                ?>
                <p class="text-center">Votre message a bien était envoyé !</p>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="row blue-container my-form" style="margin-bottom: 5px">
        <div class="col-md-12 center">
            <form role="form" method="post" action="php_scripts/send_message.php">
                <div class="form-group">
                    <label for="name">Votre Nom :</label>
                    <input type="text" class="form-control" id="name" name="name" />
                </div>
                <div class="form-group">
                    <label for="mail">Votre e-mail :</label>
                    <input type="email" class="form-control" id="mail" name="mail" />
                </div>
                <div class="form-group">
                    <label for="subject">Sujet :</label>
                    <input type="text" class="form-control" id="subject" name="subject" />
                </div>
                <div class="form-group">
                    <label for="message">Votre Message : </label>
                    <textarea class="form-control" id="message" name="message" ></textarea>
                </div>
                <button type="submit" class="btn btn-default">Envoyer</button>
            </form>
        </div>
    </div>
    <?php include_once('templates/mosaique.php'); ?>
</div>

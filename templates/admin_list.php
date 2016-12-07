<?php
/*
** Created by PhpStorm.
** User: ferdin_k
** Date: 12/2/16
** Time: 1:13 PM
*/
$recruts = get_recruts();
$messages = get_messages();
?>
<div class="row accordion-container">
    <h4 class="text-center">Messages</h4>
    <div class="panel-group" id="message-accordion">
        <?php foreach($messages as $message) { ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="message-heading-<?php echo $message['id']; ?>">
                    <h4 class="panel-title">
                        <span class="pull-right"><?php echo $message['mail']; ?></span>
                        <a data-toggle="collapse"
                           data-parent="#message-accordion"
                           href="#message-collapse-<?php echo $message['id']; ?>"
                           aria-expanded="false"
                           aria-controls="message-collapse-<?php echo $message['id']; ?>">
                            <?php echo $message['subject'] . ' <em>de</em> ' . $message['name'] . ' <em>le</em> ' . $message['date']; ?>
                        </a>
                    </h4>
                </div>
                <div id="message-collapse-<?php echo $message['id']; ?>"
                     class="panel-collapse collapse"
                     role="tabpanel"
                     aria-labelledby="message-heading-<?php echo $message['id']; ?>">
                    <div class="panel-body">
                        <?php echo $message['message']; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="row accordion-container">
    <h4 class="text-center">Annonces</h4>
    <div class="panel-group" id="recrut-accordion">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="add-recrut-heading">
                <h4 class="panel-title text-center">
                    <a data-toggle="collapse"
                       data-parent="#recrut-accordion"
                       href="#add-recrut-collapse"
                       aria-expanded="false"
                       aria-controls="add_recrut">
                        Ajouter un nouvelle annonce
                    </a>
                </h4>
            </div>
            <div id="add-recrut-collapse"
                 class="panel-collapse collapse"
                 role="tabpanel"
                 aria-labelledby="add-recrut-heading">
                <div class="panel-body">
                    <form role="form" method="post" action="php_scripts/add_recrut.php">
                        <div class="form-group">
                            <label for="title">Titre :</label>
                            <input type="text" class="form-control" id="title" name="title" />
                        </div>
                        <div class="form-group">
                            <label for="entreprise">Entreprise :</label>
                            <textarea class="form-control" id="entreprise" name="entreprise"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="missions">Missions :</label>
                            <textarea class="form-control" id="missions" name="missions"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="competences">Compétences :</label>
                            <textarea class="form-control" id="competences" name="competences"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="remuneration">Rémunération :</label>
                            <textarea class="form-control" id="remuneration" name="remuneration"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact :</label>
                            <textarea class="form-control" id="contact" name="contact"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Ajouter l'annonce</button>
                    </form>
                </div>
            </div>
        </div>
        <?php foreach($recruts as $recrut) { ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="recrut-heading-<?php echo $recrut['id']; ?>">
                    <h4 class="panel-title">
                        <a href="php_scripts/delete_recrut.php?id=<?php echo $recrut['id'] ?>"><span class="glyphicon glyphicon-remove pull-right" aria-hidden="true"></span></a>
                        <span class="pull-right" style="color: #F5F5F5"> | </span>
                        <a href="index.php?section=admin&mod_recrut=<?php echo $recrut['id'] ?>"><span class="glyphicon glyphicon-pencil pull-right" aria-hidden="true"></span></a>
                        <a data-toggle="collapse"
                           data-parent="#recrut-accordion"
                           href="#recrut-collapse-<?php echo $recrut['id']; ?>"
                           aria-expanded="false"
                           aria-controls="recrut-collapse-<?php echo $recrut['id']; ?>">
                            <?php echo $recrut['titre']; ?>
                        </a>
                    </h4>
                </div>
                <div id="recrut-collapse-<?php echo $recrut['id']; ?>"
                     class="panel-collapse collapse"
                     role="tabpanel"
                     aria-labelledby="recrut-heading-<?php echo $recrut['id']; ?>">
                    <div class="panel-body">
                        <h4>Description de l'entreprise :</h4><br />
                        <?php echo $recrut['entreprise'] ?><br /><br />
                        <h4>Missions :</h4><br />
                        <?php echo $recrut['missions'] ?><br /><br />
                        <h4>Compétences :</h4><br />
                        <?php echo $recrut['competences'] ?><br /><br />
                        <h4>Rémunération :</h4><br/>
                        <?php echo $recrut['remuneration'] ?><br /><br />
                        <h4>Contact :</h4><br />
                        <?php echo $recrut['contact'] ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
/*
** Created by PhpStorm.
** User: ferdin_k
** Date: 12/2/16
** Time: 1:22 PM
*/
$recrut = get_recrut($_GET['mod_recrut']);
?>
<div class="row blue-container">
    <div class="col-xs-12">
        <form role="form" method="post" action="php_scripts/mod_recrut.php?id=<?php echo $_GET['mod_recrut']; ?>">
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $recrut['titre']; ?>" />
            </div>
            <div class="form-group">
                <label for="entreprise">Entreprise :</label>
                <textarea class="form-control" id="entreprise" name="entreprise"><?php echo $recrut['entreprise'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="missions">Missions :</label>
                <textarea class="form-control" id="missions" name="missions"><?php echo $recrut['missions'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="competences">Compétences :</label>
                <textarea class="form-control" id="competences" name="competences"><?php echo $recrut['competences'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="remuneration">Rémunération :</label>
                <textarea class="form-control" id="remuneration" name="remuneration"><?php echo $recrut['remuneration'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="contact">Contact :</label>
                <textarea class="form-control" id="contact" name="contact"><?php echo $recrut['contact'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-default">Modifier l'annonce</button>
        </form>
    </div>
</div>

<?php
/*
** Created by PhpStorm.
** User: ferdin_k
** Date: 12/2/16
** Time: 11:23 AM
*/
if (!isset($_SESSION['id'])) {
    header('location: index.php?section=index');
}
include_once('php_scripts/db_query.php');
?>
<div class="container">
    <a href="php_scripts/logout.php">Se Déconnecter</a>
    <?php
    if (isset($_GET['mod_recrut'])) {
        include_once('templates/admin_mod_recrut.php');
    } else {
        include_once('templates/admin_list.php');
    }
    ?>
</div>

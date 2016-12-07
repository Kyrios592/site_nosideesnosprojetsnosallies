<?php
/*
** Created by PhpStorm.
** User: Kyrios
** Date: 14/11/2016
** Time: 15:29
*/

include_once('db_connect.php');

$req = $db->prepare('UPDATE recrutement SET titre=:title, entreprise=:entreprise, missions=:missions, competences=:competences, remuneration=:remuneration, contact=:contact WHERE ID=:id');
$req->execute(array('title' => $_POST['title'],
    'entreprise' => $_POST['entreprise'],
    'missions' => $_POST['missions'],
    'competences' => $_POST['competences'],
    'remuneration' => $_POST['remuneration'],
    'contact' => $_POST['contact'],
    'id' => $_GET['id']));

header('location: ../index.php?section=admin');
exit;
<?php
/*
** Created by PhpStorm.
** User: Kyrios
** Date: 14/11/2016
** Time: 15:58
*/

include_once('db_connect.php');

$req = $db->prepare('INSERT INTO recrutement(titre, entreprise, missions, competences, remuneration, contact, date) VALUES(:title, :entreprise, :missions, :competences, :remuneration, :contact, CURDATE())');
$req->execute(array('title' => $_POST['title'],
    'entreprise' => $_POST['entreprise'],
    'missions' => $_POST['missions'],
    'competences' => $_POST['competences'],
    'remuneration' => $_POST['remuneration'],
    'contact' => $_POST['contact']));

header('location: ../index.php?section=admin');
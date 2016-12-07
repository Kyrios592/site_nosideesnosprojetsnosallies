<?php
/*
** Created by PhpStorm.
** User: Kyrios
** Date: 14/11/2016
** Time: 16:25
*/

include_once('db_connect.php');

$req = $db->prepare('DELETE FROM recrutement WHERE ID=:id');
$req->execute(array('id' => $_GET['id']));

header('location: ../index.php?section=admin');
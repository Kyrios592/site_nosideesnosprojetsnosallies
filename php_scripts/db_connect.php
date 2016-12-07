<?php
/*
** Created by PhpStorm.
** User: Kyrios
** Date: 09/11/2016
** Time: 10:58
*/

try {
    $db = new PDO('mysql:host=localhost;dbname=nosidees_nosprojets_nosallies;charset=utf8', 'root', '');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
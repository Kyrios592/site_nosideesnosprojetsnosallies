<?php
/*
** Created by PhpStorm.
** User: Kyrios
** Date: 10/11/2016
** Time: 13:08
*/

include_once('db_connect.php');

$username = $_POST['user_name'];
$pass_hash = sha1($_POST['password']);

$req = $db->prepare('SELECT id FROM membres WHERE username = :pseudo AND passwd = :pass');
$req->execute(array('pseudo' => $username, 'pass' => $pass_hash));

$result = $req->fetch();

if (!$result) {
    header('location: ../index.php?section=login&iuop=1');
    exit;
} else {
    session_start();
    $_SESSION['id'] = $result['id'];
    $_SESSION['pseudo'] = $username;
    header('location: ../index.php?section=admin');
    exit;
}

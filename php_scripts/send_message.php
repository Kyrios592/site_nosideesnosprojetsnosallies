<?php
/*
** Created by PhpStorm.
** User: ferdin_k
** Date: 12/2/16
** Time: 10:47 AM
*/

include_once('db_connect.php');

$query = $db->prepare('INSERT INTO messages(name, mail, subject, date, message) VALUES(:name, :mail, :subject, CURDATE(), :message)');
$query->execute(array(
    'name' => $_POST['name'],
    'mail' => $_POST['mail'],
    'subject' => $_POST['subject'],
    'message' => $_POST['message']
));

header('location: ../index.php?section=contact&send=1');
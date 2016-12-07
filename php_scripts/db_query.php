<?php
/*
** Created by PhpStorm.
** User: Kyrios
** Date: 14/11/2016
** Time: 13:58
*/

function get_recruts() {
    global $db;

    $req = $db->prepare('SELECT id, titre, entreprise, missions, competences, remuneration, contact, DATE_FORMAT(date, \'%d/%m/%Y\') AS date FROM recrutement ORDER BY id DESC');
    $req->execute();
    $recruts = $req->fetchAll();

    foreach($recruts as $key => $recrut) {
        $recruts[$key]['titre'] = htmlspecialchars($recrut['titre']);
        $recruts[$key]['entreprise'] = htmlspecialchars($recrut['entreprise']);
        $recruts[$key]['missions'] = nl2br(htmlspecialchars($recrut['missions']));
        $recruts[$key]['competences'] = nl2br(htmlspecialchars($recrut['competences']));
        $recruts[$key]['remuneration'] = nl2br(htmlspecialchars($recrut['remuneration']));
        $recruts[$key]['contact'] = nl2br(htmlspecialchars($recrut['contact']));
    }
    return $recruts;
}

function get_recrut($id) {
    global $db;

    $req = $db->prepare('SELECT id, titre, entreprise, missions, competences, remuneration, contact, DATE_FORMAT(date, \'%d/%m/%Y\') AS date FROM recrutement WHERE id='.$id.' ORDER BY date');
    $req->execute();
    $recrut = $req->fetch();

    $recrut['titre'] = htmlspecialchars($recrut['titre']);
    $recrut['entreprise'] = htmlspecialchars($recrut['entreprise']);
    $recrut['missions'] = htmlspecialchars($recrut['missions']);
    $recrut['competences'] = htmlspecialchars($recrut['competences']);
    $recrut['remuneration'] = htmlspecialchars($recrut['remuneration']);
    $recrut['contact'] = htmlspecialchars($recrut['contact']);
    return $recrut;
}

function get_messages() {
    global $db;

    $req = $db->prepare('SELECT id, name, mail, subject, DATE_FORMAT(date, \'%d/%m/%Y\') AS date, message FROM messages ORDER BY id DESC');
    $req->execute();
    $messages = $req->fetchAll();

    foreach($messages as $key => $message) {
        $messages[$key]['name'] = htmlspecialchars($message['name']);
        $messages[$key]['mail'] = htmlspecialchars($message['mail']);
        $messages[$key]['subject'] = htmlspecialchars($message['subject']);
        $messages[$key]['message'] = nl2br(htmlspecialchars($message['message']));
    }
    return $messages;
}
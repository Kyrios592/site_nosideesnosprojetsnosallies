<?php
session_start();
include_once('php_scripts/db_connect.php');
include_once('templates/subHeader.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NOS IDEES NOS PROJETS NOS ALLIES</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
<div class="container">
    <?php
    include_once('templates/header.php');
    if (!isset($_GET['section'])) {
        include_once('page_index.php');
    } else {
        switch($_GET['section']) {
            case 'index':
                include_once('page_index.php'); break;
            case 'entreprise':
                include_once('page_entreprise.php'); break;
            case 'avantages':
                include_once('page_avantages.php'); break;
            case 'international':
                include_once('page_international.php'); break;
            case 'projets':
                include_once('page_projets.php'); break;
            case 'allies':
                include_once('page_allies.php'); break;
            case 'media':
                include_once('page_media.php'); break;
            case 'recrutement':
                include_once('page_recrutement.php'); break;
            case 'developpement':
                include_once('page_developpement.php'); break;
            case 'plan':
                include_once('page_plan.php'); break;
            case 'concept':
                include_once('page_concept.php'); break;
            case 'contact':
                include_once('page_contact.php'); break;
            case 'mentions':
                include_once('page_mentions.php'); break;
            case 'login':
                include_once('page_login.php'); break;
            case 'admin':
                include_once('page_admin.php'); break;
            default:
                include_once('page_error.php'); break;
        }
    }
    include_once('templates/footer.php');
    ?>
</div>
<script src="js/node_modules/jquery/dist/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/vScroll.js"></script>
</body>
</html>
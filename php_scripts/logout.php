<?php
/*
** Created by PhpStorm.
** User: ferdin_k
** Date: 12/2/16
** Time: 2:02 PM
*/

session_start();
session_destroy();
header('location: ../index.php');
<?php

require_once('config/config.php');
require_once('classes/Login.php');

session_start();

$login = new Login();

if ($login->isUserLoggedIn() == true) {
    if (!isset($_REQUEST['score']) || !is_numeric($_REQUEST['score'])) {
        die("no score!");
    }

    if (!isset($_REQUEST['level']) || !is_numeric($_REQUEST['level'])) {
        die("no level!");
    }


    $score = intval($_REQUEST['score']);
    $level = intval($_REQUEST['level']);
    $user_id = intval($_SESSION['user_id']);

    echo "Score: $score\n";
    echo "Level: $level\n";
    echo "ID: $user_id\n";

    $q = "INSERT INTO `test`.`score` (`user_id`, `score`, `map`) VALUES ($user_id, $score, $level);";
    echo "Pik1";
    if (! $link->query($q)) {
    echo "Error: (" . $link->errno . ") " . $link->error;
    }

    echo "Pik2";

}
else
{
    die("not logged in");
}
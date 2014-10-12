<?php
session_start();

require_once './assets/php/fitbitphp.php';
require_once './config.php';

$fitbit = new FitBitPHP(CLIENT_CONSUMER_KEY, CLIENT_CONSUMER_SECRET, null, null, 'json');
$status = $fitbit->sessionStatus();
//Check the session status
if ($status === 2) {
    if (isset($_SESSION['userId'])) {//if there is userId in the session use it to ask for user's information
        $fitbit->setUser($_SESSION['userId']);
    }
    try {//get profile
        //$profile = $fitbit->getProfile();
        //var_dump($profile);
        $activities = $fitbit->getActivities(new DateTime(date('Y-m-d', strtotime('-2 day'))));
        var_dump($activities);
    } catch (Exception $e) {
        var_dump($e->getMessage());
        echo 'entro';
        //header('Location: fitbit-login.php');
    }
} else { //no session => start session
    header('Location: fitbit-login.php');
}

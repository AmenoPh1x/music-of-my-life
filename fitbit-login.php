<?php

session_start();
//Include phpOauth libreary for FitBit (https://github.com/heyitspavel/fitbitphp)
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
        header('Location: fitbit.php');
    } catch (Exception $e) {
        $fitbit->initSession('http://dev.dropbox/music-of-my-life/fitbit-login.php');
        $profile = $fitbit->getProfile();
        $_SESSION['userId'] = $profile->user->encodedId;
    }
} else { //no session => start session
    $fitbit->initSession('http://dev.dropbox/music-of-my-life/fitbit-login.php');
}




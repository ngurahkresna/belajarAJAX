<?php

//session start
session_start();

//import autoload
require './vendor/autoload.php';


//facebook apps initiation
$fb = new \Facebook\Facebook([
    'app_id' => '1111715225910711',
    'app_secret' => '7d831a4fbbf634bc526048fa09b789ab',
    'default_graph_version' => 'v2.7'

]);


//call fb method
$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/belajarAJAX/");


//create token
try {

    $accessToken = $helper->getAccessToken();
    if (isset($accessToken)) {
        $_SESSION['access_token'] = (string)$accessToken;

        header("Location:index.php");
    }

} catch (Exception $ex) {
    echo $ex->getTraceAsString();
}


//get name from facebook
if(isset($_SESSION['access_token'])){

    try {
        $fb->setDefaultAccessToken($_SESSION['access_token']);
        $res = $fb->get('/me?locale=en_US&fields=name,email');
        $user= $res->getGraphUser();
        $user->getField('name');

    }catch (Exception $exception){
        echo $exception->getTraceAsString();
    }
}

?>
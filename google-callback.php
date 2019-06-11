<?php
    require_once 'config.php';

    // Check if token already exist
    if (isset($_SESSION['access-token'])) {
        // Set Google user access token to current token
        $googleClient->setAccessToken($_SESSION['access_token']);

        // Check to see if request code exist
    }  else if (isset($_GET['code'])) {
       // Get User Token
       $token = $googleClient->fetchAccessTokenWithAuthCode($_GET['code']);
       // store in the session also
       $_SESSION['access_token'] = $token;

        // Not login in with google
    } else {
        header('Location: login.php');
        exit();
    }


    // // Get Users Information form Google
    $oAuth = new Google_Service_Oauth2($googleClient);
    $userInfo = $oAuth->userinfo->get();

    // Store User information in session's variable
    $_SESSION['name'] =        $userInfo['givenName'];
    $_SESSION['email'] =       $userInfo['email'];
    $_SESSION['id'] =          $userInfo['id'];
    $_SESSION['gender'] = $userInfo['gender'];
    $_SESSION['picture'] =     $userInfo['picture'];

    header('Location: index.php');
    exit();
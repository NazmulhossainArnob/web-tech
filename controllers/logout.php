<?php 

include('socialauth.php');



    session_start();
    session_destroy();
    $client->revokeToken();
    setcookie('flag', 'asif', time()-10, '/');
    header('location: ../views/login.php');
?>
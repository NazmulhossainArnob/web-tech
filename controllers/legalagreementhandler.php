<?php 

    session_start();
    if(isset($_REQUEST['submit'])){

        header('location: ../views/registration.php');

    }
    else
    {
        header('location: ../views/login.php');
    }
    ?>
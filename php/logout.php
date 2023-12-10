<?php



    session_start();
    session_unset();
    session_destroy();

    header('location:/nhom2_php/sign-in.html');

?>
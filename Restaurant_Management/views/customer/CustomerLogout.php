<?php

    session_start();
    if(session_destroy()){
        setcookie('Email','',time()-3600);
        setcookie('Password','',time()-3600);
        header('location:CustomerLogin.php');
    }
?>
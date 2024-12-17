<?php

    session_start();
    unset($_SESSION['user_name']);
    header("Location: ../view/login.php")

?>
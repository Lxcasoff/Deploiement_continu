<?php
    include("../disconnect_user.php");

    session_start();
    $_SESSION["CONNECTED"] = 1;

    disconnect_user();

    if (!isset($_SESSION["CONNECTED"])) {
        printf("true");
    } else {
        printf("false");
        printf($_SESSION["CONNECTED"]);
    }
<?php
    include("../update.php");

    $ret1 = update_user("' OR '1'='1", "old_password", "new_password");
    $ret2 = update_user(";ls -la;", "old_password", "new_password");
    $ret3 = update_user("existing_user", "MotDePasse@99", "' OR '1'='1");
    $ret4 = update_user("existing_user", "' OR '1'='1", "new_password");
    $ret5 = update_user("existing_user", ";ls -la;", "new_password");

    if (($ret1 == 2) && ($ret2 == 2) && ($ret3 == 4) && ($ret4 == 4) && ($ret5 == 4)) {
        printf("true");
    } else {
        printf("false");
        printf($ret1);
        printf($ret2);
        printf($ret3);
        printf($ret4);
        printf($ret5);
    }
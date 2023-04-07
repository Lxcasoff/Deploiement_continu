<?php
    include("../update.php");

    $ret1 = update_user("", "old_password", "new_password");
    $ret2 = update_user("username", "", "new_password");
    $ret3 = update_user("username", "old_password", "");

    if (($ret1 == 1) && ($ret2 == 1) && ($ret3 == 1)) {
        printf("true");
    } else {
        printf("false");
        printf($ret1);
        printf($ret2);
        printf($ret3);
    }
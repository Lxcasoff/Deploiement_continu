<?php
    include("../delete.php");

    $ret1 = delete_user("' OR '1'='1");
    $ret2 = delete_user(";ls -la;");

    if (($ret1 == 2) && ($ret2 == 2)) {
        printf("true");
    } else {
        printf("false");
        printf($ret1);
        printf($ret2);
    }
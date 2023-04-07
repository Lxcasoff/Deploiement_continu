<?php
    include ("../connect.php");
    $ret1 = connect_user("admin", "Password1234!");
    $ret2 = connect_user("@//:User", "Motdepasse!");
    $ret3 = connect_user("", "Motdepasse!");
    $ret4 = connect_user("admin", "Azertyuiop!");
    if (($ret2 == 2) && ($ret3 == 1) && ($ret4 == 4)) {
        printf("true");
    }else {
        printf("false");
        printf($ret1);
        printf($ret2);
        printf($ret3);
        printf($ret4);
    }
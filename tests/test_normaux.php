<?php
    include("../new.php");
    $ret1 = create_user("username$", "password");
    $ret2 = create_user("username", "passwor");
    $ret3 = create_user("USERNAME", "password");
    $ret4 = create_user("USERNAME", "password!.");
    if (($ret1 == 2) && ($ret2 == 3) && ($ret3 == 5) && ($ret4 == 0)) {
        printf("true");
    }else {
        printf("false");
        printf($ret1);
        printf($ret2);
        printf($ret3);
        printf($ret4);
    }

<?php
    include("../new.php");
    $ret1 = create_user("' OR '1'='1", "password##");
    $ret2 = create_user(";ls -la;", "password##");
    $ret3 = create_user("AZLdjAHfoaj", "MotDePasse@99");
    if (($ret1 == 2) && ($ret2 == 2) && ($ret3 == 0)) {
        printf("true");
    }else {
        printf("false");
        printf($ret1);
        printf($ret2);
        printf($ret3);
    }

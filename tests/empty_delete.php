<?php
    include("../delete.php");
    $ret1 = delete_user("");
    if ($ret1 == 1) {
        printf("true");
    } else {
        printf("false");
        printf($ret1);
    }
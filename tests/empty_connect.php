<?php
  include("../connect_user.php");

  $ret1 = connect_user("", "password");
  $ret2 = connect_user("username", "");

  if (($ret1 == 1) && ($ret2 == 1)) {
    printf("true");
  } else {
    printf("false");
    printf($ret1);
    printf($ret2);
  }
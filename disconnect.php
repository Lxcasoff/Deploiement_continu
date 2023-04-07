<?php
  session_start();
    function disconnect_user() {
        session_start();
        if (isset($_SESSION["CONNECTED"])) {
            unset($_SESSION["CONNECTED"]);
        }
        session_destroy();
        return 0;
    }

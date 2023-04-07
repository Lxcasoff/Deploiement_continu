<?php
  session_start();

    function delete_user($username) {
        $userfile = "/var/www/html/users/" . $username;

        if (empty($username)) {
            return 1;
        }
        if (preg_match('/[^A-Za-z0-9]/', $username)) {
            return 2;
        }
        if(!file_exists($userfile)){
            return 3;
        }

        if (unlink($userfile) === false) {
            return 4;
        }
        return 0;
    }

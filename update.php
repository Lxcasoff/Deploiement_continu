<?php
session_start();
function update_user($username, $old_password, $new_password)
{
  $userfile = "/var/www/html/users/" . $username;

  if ((empty($username)) || (empty($old_password)) || (empty($new_password))) {
    return 1;
  }
  if (preg_match('/[^A-Za-z0-9]/', $username)) {
    return 2;
  }
  if (!file_exists($userfile)) {
    return 3;
  }
  $userData = file_get_contents($userfile);
  if ($userData !== $old_password) {
    return 4;
  }

  if (file_put_contents($userfile, $new_password) === false) {
    return 5;
  }
  return 0;
}
